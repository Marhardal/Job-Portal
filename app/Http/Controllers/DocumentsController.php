<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Exception;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentsController extends Controller
{
    public function Resume()
    {
        $doc = new PhpWord();
        // $resume=Resume::get(auth()->user()->id);
        $section = $doc->addSection();
        $description = Resume::find(auth()->user()->id)->summary;
        $section->addText($description);
        $writer = IOFactory::createWriter($doc, 'Word2007');
        try {
            $writer->save(storage_path(auth()->user()->first_name . " " . auth()->user()->surname . " Resume.docx"));
        } catch (Exception $error) {
            Alert::error('Error', 'Failed to create your Document');
        }
        return response()->download(storage_path(auth()->user()->first_name . " " . auth()->user()->surname . "Resume.docx"));
    }
}
