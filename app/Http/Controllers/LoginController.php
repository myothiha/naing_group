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

        session_start();
        if(isset($_SESSION['room'])){
            $room = $_SESSION['room'];
        }
        session_destroy();
        if (Auth::attempt($credentials)) {
           
            if(!empty($room)){

                return redirect()->intended("/customer/room/$room->id/booking/create");
               
            }
            else if(Auth::user()->role == 'customer'){

                return redirect()->intended("/customer/bookedroom");
            }else if(Auth::user()->role == "admin"){
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
