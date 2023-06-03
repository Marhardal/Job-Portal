<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Education;
use App\Models\Qualification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Education::with('resumes', 'qualifications')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.resume.createEducation')->with(['qualification'=>Qualification::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'qualification_id' => ['required', Rule::exists('qualifications', 'id')],
            'school' => ['required'],
            'start_date' => ['required'],
            'graduation_date' => ['required'],
        ]);

        $values['resume_id'] = Resume::find(auth()->user()->id)->id;
        if (Education::create($values)) {
            return redirect('resume');
            Alert::success('Success', 'Education Created');
        } else {
            return redirect()->back();
            Alert::error("Failed", "Education not Created.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}
