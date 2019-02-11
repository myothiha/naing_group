<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use App\Booking;
use App\Constant;
use Auth;

class CustomerController extends Controller
{
    //
    public function getbookroom(){

        $bookedrooms = Booking::where('customer_id',Auth::id())->get();
        return view('customer.index',[
            'bookedrooms' => $bookedrooms
        ]);
    }
    public function getregister(){
    	return view('customer.register');
    }
    public function postregister(Request $request){

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->role  = Constant::CUSTOMER_ROLE;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	return redirect('/customer/bookedroom');
    }
}
