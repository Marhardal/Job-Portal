<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Referral;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;
use Nnjeim\World\World;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Resume::find(auth()->user())->get());
        return view('seeker.resume')->with(['resumes' => Resume::find(auth()->user())]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = World::cities([
            'fields' => 'cities',
            'filters' => ['country_id' => '131']
        ]);
        return view('seeker.resume.create')->with(["countries" => World::Countries(), "district" => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'phone_number' => ['nullable'],
            'address' => ['nullable'],
            'district' => ['required'],
            'country' => ['required'],
            'summary' => ['required', 'min:200'],
        ]);

        // dd($values);

        $values['user_id'] = auth()->user()->id;
        $resume = Resume::create($values);
        if ($resume) {
            return redirect('resume/experience');
            Alert::success('Success', 'Professional Summary Created');
        } else {
            return redirect()->back();
            Alert::error("Failed", "Professional Summary not Created.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        return view('seeker.resume.referral.show')->with(['resumes'=>$resume->referral]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        return view('seeker.resume.resumeUpdate')->with(['resume' => $resume]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $values = $request->validate([
            'phone' => ['nullable'],
            'postal' => ['nullable'],
            'city' => ['required'],
            'country' => ['required'],
            'summary' => ['required', 'min:200'],
        ]);

        if ($resume->update($values)) {
            session()->put("resume_id", $resume->id);
            return redirect('resume');
            Alert::success('Success', 'Professional Summary Updated');
        } else {
            return redirect()->back();
            Alert::error("Failed", "Professional Summary not Created.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
