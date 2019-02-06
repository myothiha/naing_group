<?php

namespace App\Http\Controllers;

use App\Room;
use App\Booking;
use Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Room $room)
    {
        //
        return view('bookroom',compact('room'));
    }

    /**
     * Store a newly created resource in storage.''
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Room $room,Request $request)
    {
        //
        $booking = new Booking;
        $booking->customer_id =  Auth::id() ?? 1;
        $booking->room_id = $room->id;
        $booking->name    = $request->name ?? '';
        $booking->email   = $request->email?? '';
        $booking->phone   = $request->phone?? '';
        $booking->meeting_dates = $request->meeting_dates ?? '';
        $booking->dos           = $request->dos ?? '';
        $booking->affordable_time = $request->affordabletime ?? '';
        $booking->location        = $request->location ?? '';
        $booking->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
