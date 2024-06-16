<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('panel/user')) {
            $data = User::all();
        } else
        if ($request->is('panel/user/client')) {
            $data = User::where('userType', 'user')->get();
        } else
        if ($request->is('panel/user/administrator')) {
            $data = User::where('userType', 'administrator')->get();
        } else
        if ($request->is('panel/user/service-provider')) {
            $data = User::where('userType', 'services')->get();
        } else
        if ($request->is('panel/user/superadministrator')) {
            $data = User::where('userType', 'superadministrator')->get();
        } else
        {
            return back()->with('warning', 'Something went wrong...');
        }

        ### If data is null ###
        if (empty($data)) {
            return back()->with('warning', 'Something went wrong...');
        }
        
        return view('admin.panel.user.index', compact('data'));
    }

    public function show($id)
    {
        $data['data'] = User::findOrFail($id);
        $data['roles'] = Role::all();

        return view('admin.panel.user.show.index', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required', 'string'],
            'status' => ['string', 'max:3'],
        ]);

        // dd($request);

        if ($request->status === 'on') {
            $status = '1';
        } else if (!$request->status) {
            $status = '0';
        }
        $bdUser = User::updateOrCreate(
            ['id' =>  $id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'isActive' => $status,
                'userType' => $request->role,
            ],
        );

        if ($bdUser) {
            return redirect()->back()->with('success', 'The User Info Already Updated!');
        }
        

    	return redirect()->back();
    }

    public function create()
    {
        $data['roles'] = Role::all();
        return view('admin.panel.user.create.index', $data);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required', 'string'],
            'status' => ['string', 'max:3'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        if ($request->status === 'on') {
            $status = '1';
        } else if (!$request->status) {
            $status = '0';
        }

        if (! Auth::user()->hasRole('superadministrator')) {
            return back()->with('failed', 'Only Superadmin can create user.');
        }

        $bdUser = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'isActive' => $status,
                'userType' => $request->role,
                'password' => Hash::make($request->password),
            ]
        );
        $bdUser->attachRole($request->role);

        if ($bdUser) {
            return redirect()->route('panel.user')->with('success', 'The User Info Already Created!');
        }
    }
}
