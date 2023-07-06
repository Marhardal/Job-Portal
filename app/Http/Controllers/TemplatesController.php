<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Templates;
use Illuminate\Http\Request;

class TemplatesController extends Controller
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
    public function show(Resume $resume)
    {
        $resume=$resume->find(auth()->user());
        return view('templates.template1')->with(['resumes'=>$resume]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Templates $templates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Templates $templates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Templates $templates)
    {
        //
    }
}
