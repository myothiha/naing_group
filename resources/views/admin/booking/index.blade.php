@extends('admin.layouts.back')

@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">DataTables Bookings </h6>
        </div>
        <!--END BREADCRUMB-->

        <!--BEGIN PAGE CONTENT-->
        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="title_box sm-header-style-1">
                                
                                <h6 class="sm-header">
                                    DataTables Booking
                                </h6>
                            </div>
                            <div class="sm-box">
                                
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th> Meeting Dates </th>
                                        <th> Time </th>
                                        <th> Location </th>    
                                        <th> Project </th>                                   
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @php $i=1; @endphp
                                        @foreach($bookings as $booking)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td> {{ $booking->name }} </td>
                                            <td> {{ $booking->email }} </td>
                                            <td> {{ $booking->phone }} </td>
                                            <td> {{ $booking->meeting_dates }} </td>
                                            <td> {{ $booking->affordable_time }} </td>
                                            <td> {{ $booking->location }} </td>
                                            <td> {{ $booking->room->project->name }} ({{ $booking->room->name }}) </td>
                                            
                                        @endforeach

                                        </tr>                                                                       
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--END PAGE CONTENT-->
    </div>
</section>

@endsection