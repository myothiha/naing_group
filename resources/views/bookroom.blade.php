@extends('layouts.front')
@section('content')
@include('layouts.menu')

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
                    <div class="col-md-4" data-aos="fade-right">
                        <ul class="agent-list">
                            <li>
                                @if(empty($contacts))
                                    There is No Data
                                @else
                                {{ $contacts->address }} 
                                @endif
                            </li>
                            <li>
                              @if(empty($contacts))
                                    There is No Data
                                @else
                                {{ $contacts->mail }} 
                                @endif
                            </li>
                            <li>
                                 @if(empty($contacts))
                                    There is No Data
                                @else
                                {{ $contacts->phone }} 
                                @endif
                            </li>
                            <div class="agent-social">
                                <i class="fab fa-facebook-f mx-1"></i>
                                <i class="fab fa-google-plus-g mx-1"></i>
                                <i class="fab fa-twitter mx-1"></i>
                            </div>
                        </ul>
                    </div>
                    <div class="col-md-8" data-aos="fade-left">
                        <form action="/customer/room/{{ $room->id }}/booking " method="POST">
                            {{ csrf_field() }}
	                        <div class="form-group">
	                            <div class="form-row">
	                                <div class="col">
	                                    <input type="text" name="name" class="form-control" placeholder="Your name">
	                                </div>
	                                <div class="col">
	                                    <input type="text" name="email" class="form-control" placeholder="Email">
	                                </div>
	                            </div>
	                        </div>
							<div class="form-group">
	                            <div class="form-row">
	                                <div class="col">
	                                    <input type="date" name="meeting_dates" class="form-control" placeholder="Meeting Date">
	                                </div>
	                                <div class="col">
	                                    <input type="text" name="affordabletime" class="form-control" placeholder="Affordable Time">
	                                </div>
	                            </div>
                            </div>

                            <div class="form-group">
	                            <div class="form-row">
	                                <div class="col">
	                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone">
	                                </div>
	                                <div class="col">
	                                	<select name="location" class="form-control">
	                                		<option value=""> Select One </option>
	                                		<option value="yangon">     Yangon </option>
	                                		<option value="mandalay"> Mandalay </option>
	                                	</select>
	                                </div>
	                            </div>
                            </div>

                            <div class="form-row my-3">
                                <div class="col">

                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="dos" placeholder="Dialogue for sales / rents " rows="3"></textarea>

                                </div>

                            </div>

                            <input type="submit" class="btn btn-primary float-right" value="Book Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection