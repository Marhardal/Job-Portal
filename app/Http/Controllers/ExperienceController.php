<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Duties;
use App\Models\Resume;
use Nnjeim\World\World;
use App\Models\Experience;
use App\Models\SeekerDuties;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

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
        $cities = World::cities([
            'filters' => ['country_id' => '131']
        ]);
        return view("seeker.resume.experience")->with(["countries" => World::Countries(), "city" => $cities, "jobs" => Job::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $values = $request->validate([
            'start_date' => ['required', 'before_or_equal:' . Carbon::today()->subMonths(3)->format('Y-m')],
            'leave_date' => ['required', 'date'],
            'employer' => ['required',],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'job_id' => ['required', Rule::exists('jobs', 'id')]
        ]);
        foreach (Resume::find(auth()->user()) as $key => $value) {
            $values['resume_id'] = $value->id;
        }
        $experience = Experience::create($values);
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
        $cities = World::states([
            'filters' => ['country_id' => '131']
        ]);
        return view('seeker.resume.editExperience')->with(["experience" => $experience, "countries" => World::Countries(), "city" => $cities, "jobs" => Job::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $values = $request->validate([
            'start_date' => ['required', 'before_or_equal:' . Carbon::today()->subMonths(3)->format('Y-m')],
            'leave_date' => ['required', 'date'],
            'employer' => ['required',],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'job_id' => ['required', Rule::exists('jobs', 'id')]
        ]);

        if ($experience->update($values)) {
            return redirect('resume');
            Alert::success('Success', 'Experience Updated');
        }else {
            return redirect()->back();
            Alert::error("Failed", "Experience not Update.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
