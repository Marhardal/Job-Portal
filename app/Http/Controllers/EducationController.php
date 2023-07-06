<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Education;
use App\Models\Qualification;
use App\Models\Referral;
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
        return view('seeker.resume.education.create')->with(['qualification' => Qualification::all()]);
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

        foreach (Resume::find(auth()->user()) as $key => $value) {
            $values['resume_id'] = $value->id;
        }
        if (Education::create($values)) {
            return redirect('resume');
            Alert::success('Success', 'Referral Added');
        } else {
            return redirect()->back();
            Alert::error("Failed", "Referral not Added.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        // dd($resume->qualification);
        return view('seeker.resume.education.show')->with(['resumes'=>$resume->qualification]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('seeker.resume.education.edit')->with(['education' => $education, 'qualification'=>Qualification::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $values = $request->validate([
            'qualification_id' => ['required', Rule::exists('qualifications', 'id')],
            'school' => ['required'],
            'start_date' => ['required'],
            'graduation_date' => ['required'],
        ]);
        if ($education->update($values)) {
            return redirect('resume');
            Alert::success('Success', 'Referral Updated');
        } else {
            return redirect()->back();
            Alert::error("Failed", "Referral not Updated.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->back();
    }
}
