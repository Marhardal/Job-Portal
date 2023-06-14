<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Referral;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $resume = Resume::find(auth()->user()->id);
        // dd($resume->qualification->pivot);
        // foreach (Experience::first()->duties as $key => $value) {
        //     dd($value->count());
        // }
        return view('seeker.resume')->with(['resume' => Resume::find(auth()->user()->id)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seeker.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        $values = $request->validate([
            'phone'=>['nullable'],
            'postal'=>['nullable'],
            'city'=>['required'],
            'country'=>['required'],
            'summary' => ['required', 'min:200'],
        ]);

        $values['user_id'] = auth()->user()->id;
        $resume = Resume::create($values);
        if ($resume) {
            session()->put("resume_id", $resume->id);
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
        //
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
            'phone'=>['nullable'],
            'postal'=>['nullable'],
            'city'=>['required'],
            'country'=>['required'],
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
