<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Auth\Events\Registered;

class RegisteredRoleController extends Controller

{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.add-role');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $role = Role::create([
            'name' => $request->name,
        ]);

        event(new Registered($role));


        return redirect()->route('add-role');
        //return redirect()->route("web");
        //return redirect(RouteServiceProvider::HOME);
    }
}
