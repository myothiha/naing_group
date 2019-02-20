@extends('customer.layouts.back')
@section('content')
	<section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Book Room </li>
                </ol>
            </nav>
        </div>
    </section>


   	<div class="container my-3">
        <div class="row p-3">
            <div class="col-md-12">
                <h2 class="title my-5" data-aos="fade-left"> Book Room </h2>

                <div class="row my-3">
                    
                    <div class="col-md-8" data-aos="fade-left">
                        <form action="/customer/room/{{ $booking->room_id }}/booking/{{ $booking->id }} " method="POST">
                            <input type="hidden" name = "_method" value = "PUT">
                            {{ csrf_field() }}
	                        <div class="form-group">
	                            <div class="form-row">
	                                <div class="col">
	                                    <input type="text" name="name" value = "{{  \Illuminate\Support\Facades\Auth::user()->name }}" class="form-control" placeholder="Your name" required>
	                                </div>
	                                <div class="col">
	                                    <input type="email" name="email" value = "{{  \Illuminate\Support\Facades\Auth::user()->email }}" class="form-control" placeholder="Email" required>
	                                </div>
	                            </div>
	                        </div>
							<div class="form-group">
	                            <div class="form-row">
	                                <div class="col">
	                                    <input type="date" name="meeting_dates" class="form-control" placeholder="Meeting Date" required value = "{{ $booking->meeting_dates }}">
	                                </div>
	                                <div class="col">
	                                    <input type="text" name="affordabletime" class="form-control" placeholder="Affordable Time"  value = "{{ $booking->affordable_time }}" required>
	                                </div>
	                            </div>
                            </div>

                            <div class="form-group">
	                            <div class="form-row">
	                                <div class="col">
	                                    <input type="text" name="phone" value = "{{  \Illuminate\Support\Facades\Auth::user()->phone }}" class="form-control" placeholder="Your Phone">
	                                </div>
	                                
	                            </div>
                            </div>

                            <div class="form-row my-3">
                                <div class="col">

                                    <textarea class="form-control"  name="location" placeholder="Enter Location" rows="3">{{ $booking->location }}</textarea>

                                </div>

                            </div>

                            <div class="form-row my-3">
                                <div class="col">

                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="dos" placeholder="Dialogue for sales / rents " rows="3"> {{ $booking->dos }} </textarea>

                                </div>

                            </div>

                            <input type="submit" class="btn btn-primary float-right" value="Update Booking">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection