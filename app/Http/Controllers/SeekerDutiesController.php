<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Duties;
use App\Models\Resume;
use App\Models\Experience;
use App\Models\SeekerDuties;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class SeekerDutiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $duties = SeekerDuties::with('job', 'duties', 'resumes', 'experiences')->get();
        return $duties;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seeker.resume.jobduties')->with(['jobs' => Job::all(), 'duties' => Duties::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd( Experience::latest()->first()->id);
        $values = $request->validate([
            'job_id' => ['required', Rule::exists('jobs', 'id')],
            'duty_id' => ['required', Rule::exists('duties', 'id')],
        ]);

        $values['experience_id'] = Experience::latest()->first()->id;
        $values['resume_id'] = Resume::find(auth()->user()->id)->id;

        if (SeekerDuties::create($values)) {
            // Alert::question("System", "Do you want to add another experience or Next");
            return redirect("resume");
        } else {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(SeekerDuties $Seekerdutie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeekerDuties $Seekerdutie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeekerDuties $Seekerdutie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeekerDuties $Seekerdutie)
    {
        //
    }
}
