<?php

namespace App\Http\Controllers;

use App\Models\VacancyDuties;
use Illuminate\Http\Request;

class VacancyDutiesController extends Controller
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
        return view('Recruiters.Duties.create');
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
    public function show(VacancyDuties $vacancyDuties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VacancyDuties $vacancyDuties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VacancyDuties $vacancyDuties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VacancyDuties $vacancyDuties)
    {
        //
    }
}
