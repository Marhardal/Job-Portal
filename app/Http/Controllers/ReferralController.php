<?php

namespace App\Http\Controllers;

use App\Models\Resume;
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
        return view('customers.resume.createReferral');
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

        $values['resume_id'] = Resume::find(auth()->user()->id)->id;
        if (Referral::create($values)) {
            return redirect('resume');
            Alert::success('Success', 'Referral Created');
        }else {
            return redirect()->back();
            Alert::error("Failed", "Referral not Created.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Referral $referral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referral $referral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Referral $referral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referral $referral)
    {
        //
    }
}
