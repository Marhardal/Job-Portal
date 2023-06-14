<?php

namespace App\Http\Controllers;

use App\Models\Duties;
use App\Models\Resume;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\DutyExperience;
use Illuminate\Validation\Rule;

class DutyExperienceController extends Controller
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
        return view('seekers.resume.jobduties')->with(['duties'=>Duties::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $duty_id = strip_tags($request->duty_id);
        $values=$request->validate([
            'duty_id' => ['required'],
        ]);
        $values['duty_id'] = strip_tags($values['duty_id']);
        $values['experience_id'] = Resume::find(auth()->user()->id)->experience->last()->id;
        $experience=DutyExperience::create($values);
        if ($experience) {
            return redirect('resume');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(dutyexperience $dutyexperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dutyexperience $dutyexperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dutyexperience $dutyexperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dutyexperience $dutyexperience)
    {
        dd($dutyexperience);
        // $dutyexperience->delete();
    }
}
