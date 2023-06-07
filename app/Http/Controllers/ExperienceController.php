<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Resume;
use App\Models\Experience;
use App\Models\Job;
use App\Models\SeekerDuties;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("customers.resume.experience")->with('jobs', Job::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(Resume::find(auth()->user()->id)->id);
        $values = $request->validate([
            'start_date'=>['required', 'before_or_equal:'.Carbon::today()->subMonths(3)->format('Y-m')],
            'leave_date'=>['required', 'date'],
            'employer'=>['required', ],
            'city'=>['required', 'string'],
            'country'=>['required', 'string'],
            'job_id'=>['required', Rule::exists('jobs', 'id')]
        ]);
        $values['resume_id'] = Resume::find(auth()->user()->id)->id;
        $experience=Experience::create($values);
        if ($experience) {
            session()->put('experience_id', $experience->id);
            return redirect('resume/jobduties');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
