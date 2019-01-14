<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('admin.users.index',[

    		'users' =>$users
    	]);
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {

    	$request->validate([
    		'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
    	]);

    	
    	User::create([
            'name'     => $request ['name'],
            'email'    => $request ['email'],
            'password' => bcrypt($request ['password']),
        ]);

    	return redirect('admin/user');
    }

    public function edit(User $user)
    {

    	return view('admin.users.edit',[
    		'user' => $user
    		]);
    }

    public function update(Request $request, User $user)
    {
        
        $request->validate([
    		'name'       => 'required|string|max:255',
            'email'      => 'required|string|email|max:255',
            'password'   => 'required|string|min:6',
    	]);

        $user->name       = $request->name;
    	$user->email      = $request->email;
    	$user->password   = bcrypt($request ['password']);
    	$user->save();

        return redirect('admin/user');
    }

    public function destroy(User $user)
    {
    	$user->delete();

    	return redirect('admin/user');
    }
}
