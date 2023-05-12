<?php

namespace App\Http\Controllers;

use App\Models\SeekerDuties;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
