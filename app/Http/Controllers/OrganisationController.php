<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrganisationController extends Controller
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
        return view("organisation/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values=$request->validate([
            'name'=>['required',],
            'email'=>['required', 'email'],
            'about'=>['required', 'min:200'],
            'link'=>['nullable'],
            'city'=>['required'],
            'country'=>['required'],
            'post_address'=>['nullable'],
        ]);
        $insert=Organisation::create($values);
        if ($insert) {
            session()->put('org_id' , $insert->id);
            return redirect('register');
        }else {
            Alert::error('Error', 'Failed to add your organisation');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisation $organisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisation $organisation)
    {
        //
    }
}
