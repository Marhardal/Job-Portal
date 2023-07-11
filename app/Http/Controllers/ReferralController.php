<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Nnjeim\World\World;
use App\Models\Referral;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Referral::with('resumes')->get();
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
        return view('seeker.resume.referral.create', ["countries" => World::Countries(), "cities" => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'first_name' => ['required'],
            'Surname' => ['required'],
            'job_title' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'employer' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
        ]);
        foreach (Resume::find(auth()->user()) as $key => $value) {
            $values['resume_id'] = $value->id;
        }
        if (Referral::create($values)) {
            return redirect('resume/referral/'.$values['resume_id'].'/show');
            Alert::success('Success', 'Referral Created');
        }else {
            return redirect()->back();
            Alert::error("Failed", "Referral not Created.");
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
    public function edit(Referral $referral)
    {
        return view('seeker.resume.editReferral')->with(['referral'=>$referral]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Referral $referral)
    {
        $values = $request->validate([
            'first_name' => ['required'],
            'Surname' => ['required'],
            'job_title' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'employer' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
        ]);
        if ($referral->update($values)) {
            return redirect('resume');
            Alert::success('Success', 'Referral Updated');
        }else {
            return redirect()->back();
            Alert::error("Failed", "Referral not Update.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referral $referral)
    {
        $referral->delete();
        return redirect()->back();
    }
}
