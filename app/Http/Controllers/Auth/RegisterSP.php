<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterSP extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('services') && Auth::user()->isActive == 0) {
                return redirect()->route('bd.corporate');
            } else if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('user')) {
                return redirect()->route('login');
            }
        } else {
            return view('authentication.registerSP.index');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->fname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'userType' => 'services',
        ]);
        $user->attachRole('services');

        return redirect()->route('login');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
