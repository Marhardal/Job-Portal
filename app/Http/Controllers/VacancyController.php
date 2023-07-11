<?php

namespace App\Http\Controllers;

use App\Models\Arrangement;
use App\Models\Job;
use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Nnjeim\World\World;
use Nnjeim\World\WorldHelper;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WorldHelper $world)
    {
        // dd($world->countries(['fields'=>'iso2', 'filters'=>['name'=>$vacancy->country]])->data);
        return view("seeker.jobs")->with(['jobs' => Vacancy::latest()->get(), 'world' => $world]);
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
        return view("recruiters.vacancy.create")->with([
            'countries' => World::countries(['fields' => 'name, iso3']),
            'arrangement' => Arrangement::get(),
            'cities' => $cities,
            'jobs' => Job::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'country' => ['required'],
            'city' => ['required'],
            'job_id' => ['required', Rule::exists('jobs', 'id')],
            'arrangement_id' => ['required', Rule::exists('arrangements', 'id')],
            'description' => ['required', 'min:200'],
            'deactivated_at' => ['required', 'date', 'after:' . Carbon::today()->addWeek()]
        ]);
        $org_id = 0;
        foreach (auth()->user()->organisation as $key => $value) {
            $org_id = $value->id;
        }
        $values['organisation_id'] = $org_id;
        Vacancy::create($values);
        return redirect('jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return view('recruiters.vacancy.show')->with(['vacancy' => $vacancy]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
