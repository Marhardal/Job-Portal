<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Resume;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Skill::with('resumes')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.resume.createSkill');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'name' => ['required'],
            'description' => ['required']
        ]);

        $values['resume_id'] = Resume::find(auth()->user()->id)->id;
        if (Skill::create($values)) {
            return redirect('resume');
            Alert::success('Success', 'Skill Created');
        }else {
            return redirect()->back();
            Alert::error("Failed", "Skill not Created.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
