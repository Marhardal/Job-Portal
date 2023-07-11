<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Nnjeim\World\World;
use App\Models\AddressType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seeker.letter.address.show')->with(['addresses' => Address::find(auth()->user())]);
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
        return view('seeker.letter.address.create')->with(["countries" => World::Countries(), "district" => $cities, "type" => AddressType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'postal_code' => ['required'],
            'addressing' => ['nullable'],
            'address_type_id' => ['required', Rule::exists('address_types', 'id')],
            'city' => ['required'],
            'country' => ['required'],
        ]);
        $values['user_id'] = auth()->user()->id;
        if (Address::create($values)) {
            return redirect('letter/address/')->with('success', 'Address Added Successfully');
        }else {
            return redirect()-back()->with('success', 'Address Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        $cities = World::cities([
            'fields' => 'cities',
            'filters' => ['country_id' => '131']
        ]);
        return view('seeker.letter.address.update')->with(["countries" => World::Countries(), "district" => $cities, "type" => AddressType::all(), "address"=>$address]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $values = $request->validate([
            'postal_code' => ['required'],
            'addressing' => ['nullable'],
            'address_type_id' => ['required', Rule::exists('address_types', 'id')],
            'city' => ['required'],
            'country' => ['required'],
        ]);
        $values['user_id'] = auth()->user()->id;
        if ($address->update($values)) {
            return redirect('letter/address/')->with('success', 'Address Updated Successfully');
        }else {
            return redirect()-back()->with('success', 'Address Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()-back()->with('success', 'Address Updated Successfully');
    }
}
