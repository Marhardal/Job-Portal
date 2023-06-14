<?php

namespace App\Http\Controllers;

use App\Models\Seeker;
use App\Models\SeekerDuties;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $duties = SeekerDuties::get();
        return $duties;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $values=$request->validate([
        //     'first_name'=>['required'],
        //     'surname'=>['required'],
        //     'gender'=>['required', 'min:4', 'max:6'],
        //     'phone_number'=>['required', Rule::unique('seeker', 'phone_number', 'min:9', 'max:15')],
        //     'email'=>['required', 'max:255', 'email', Rule::unique('seeker', 'email')],
        //     'date_of_birth'=>['required', 'date', 'before_or_equal' . now()->subYears(18)->format('Y-m-d') ],
        // ]);

            $seeker = new Seeker();
            $seeker->first_name=$request->first_name;
            $seeker->surname=$request->surname;
            $seeker->gender=$request->gender;
            $seeker->phone_number=$request->phone_number;
            $seeker->email=$request->email;
            $seeker->date_of_birth=$request->date_of_birth;

       if ($seeker === true) {
            return ['Result', 'success'];
       }else {
        return ['Result', 'Failed'];
       }

        // if (Seeker::create($values)) {
        // //    return redirect('resume')->with('success', 'Your  Account has been created.');
        //     return ['Result'=>'Created'];
        // } else {
        //     // return back()->with('Failed', 'Your account has not been created');
        //     return ['Result'=>'failed'];
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Seeker $seeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seeker $seeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seeker $seeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seeker $seeker)
    {
        //
    }
}
