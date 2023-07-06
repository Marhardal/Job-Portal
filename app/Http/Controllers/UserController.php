<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use App\Models\Recruiter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
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
        // dd(session('org_id'));
        return view('Users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'first_name' => ['required'],
            'surname' => ['required'],
            'username' => ['required', Rule::unique('users', 'username'), 'min:6'],
            'date_of_birth' => ['required', 'date', 'before_or_equal:' . now()->subYears(18)->format('Y-m-d')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', Rule::unique('users', 'password'), 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
            'gender' => ['required', 'min:4', 'max:6'],
            'phone' => ['required', 'min:7', 'max:15'],
        ]);
        $org_id = 0;
        if (!empty(session('org_id'))) {
            $org_id = session('org_id');
            $values['type_id'] = 3;
        }else {
            // dd('empty');
            $values['type_id'] = 1;
        }
        $user=User::create($values);
        if ($user) {
            if (!empty(session('org_id'))) {
                Recruiter::create([
                    'user_id'=>$user->id,
                    'organisation_id'=>session('org_id')
                ]);
                session()->pull('org_id');
            }
            Alert::success("Success", "Account Created");
            auth()->login($user);
            return redirect('jobs');
        }else {
            Alert::error("Failed", "Account not Created");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request)
    {
        $values=$request->validate([
            'username'=>['required', 'min:6'],
            'password'=>['required', Password::min(8)->mixedCase()->numbers()->symbols()]
        ]);

        if (auth()->attempt($values)) {
            return redirect('resume')->with(['success'=>'Logged-in Successfully.']);
        }
        throw ValidationException::withMessages(['username' => 'Your provided credentials could not be verified.']);
    }
}
