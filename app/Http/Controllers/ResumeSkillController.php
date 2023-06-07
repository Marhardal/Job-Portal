<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Resume;
use App\Models\ResumeSkill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeSkillController extends Controller
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
        return view('customers.resume.createSkill')->with(['skills' => Skill::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'skill_id' => ['required', Rule::exists('skills', 'id')]
        ]);

        $values['resume_id'] = Resume::find(auth()->user()->id)->id;
        if (ResumeSkill::create($values)) {
            return redirect('resume');
            Alert::success('Success', 'Skill Created');
        } else {
            return redirect()->back();
            Alert::error("Failed", "Skill not Created.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ResumeSkill $resumeSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResumeSkill $resumeSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResumeSkill $resumeSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResumeSkill $resumeSkill)
    {
        //
    }
}
