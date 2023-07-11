<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
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
        return view('seeker.letter.this.create')->with(['addresses' => Letter::find(auth()->user())]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            "salutation" => ['required', "min:3"],
            "title" => ['required', "min:10"],
            "closing_salutation" => ['required', "min:10"],
            "introduction" => ['required', "min:100"],
            "body" => ['required', "min:100"],
            "conclusion" => ['required', "min:100"],
        ]);
        $values['user_id'] = auth()->user()->id;
        if (Letter::create($values)) {
            return redirect('resume')->with('success', 'Cover Letter Created Successfully.');
        } else {
            return redirect()->back()->with('error', 'Cover Letter Not Created.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $letter = Letter::find(auth()->user());
        // dd($letter);
        return view('templates.letter.template1')->with(['letters' => $letter]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Letter $letter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Letter $letter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Letter $letter)
    {
        //
    }
}
