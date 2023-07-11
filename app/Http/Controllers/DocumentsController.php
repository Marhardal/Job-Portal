<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Letter;
use App\Models\Resume;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentsController extends Controller
{
    public function Resume()
    {
        // $doc = new PhpWord();
        // // $resume=Resume::get(auth()->user()->id);
        // $section = $doc->addSection();
        // $description = Resume::find(auth()->user()->id)->summary;
        // $section->addText($description);
        // $writer = IOFactory::createWriter($doc, 'Word2007');
        // try {
        //     $writer->save(storage_path(auth()->user()->first_name . " " . auth()->user()->surname . " Resume.docx"));
        // } catch (Exception $error) {
        //     Alert::error('Error', 'Failed to create your Document');
        // }
        // return response()->download(storage_path(auth()->user()->first_name . " " . auth()->user()->surname . "Resume.docx"));
        // $pdf = app('dompdf.wrapper');
        // $pdf = app('snappy.pdf.wrapper');
        $resumes=Resume::find(auth()->user());
        $pdf = PDF::loadView('templates.resume.template1', compact('resumes'));
        return $pdf->download(auth()->user()->first_name." ".auth()->user()->surname." Resume.pdf");
    }

    public function letter()
    {
        // $pdf = app('dompdf.wrapper');
        $letters=Letter::find(auth()->user());
        $pdf=PDF::loadView('templates.letter.template1', compact('letters'));
        return $pdf->download(auth()->user()->first_name." ".auth()->user()->surname." Cover Letter.pdf");
    }
}
