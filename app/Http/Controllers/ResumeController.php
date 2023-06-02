<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Resume::all());
        return view('customers.resume')->with(['resume'=>Resume::find(auth()->user()->id)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        $values = $request->validate([
            'summary'=>['required', 'min:200'],
        ]);

        $values['user_id']=auth()->user()->id;
        $resume=Resume::create($values);
        if ($resume) {
            session()->put("resume_id", $resume->id);
            return redirect('resume/experience');
            Alert::success('Success', 'Professional Summary Created');
        }else {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
