<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {

    	return view('admin.login',[
            'login' => '$active',
            ]);
    }

    public function authenticated(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'customer'){
                return redirect()->intended('/customer/bookedroom');
            }else{
            // 
                return redirect()->intended('admin');
            }
        }
        return redirect()->back()->withInput()->withFlashMessage("error", "Username and Password incorrect");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
