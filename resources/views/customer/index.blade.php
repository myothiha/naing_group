@extends('customer.layouts.back')
@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">DataTables Room</h6>
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
                                    DataTables Room
                                </h6>
                            </div>
                            <div class="sm-box">


                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Meeting Dates </th>
                                        <th> Affordable Time </th>
                                        <th> Location </th>
                                        <!-- <th>Action </th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                        @foreach($bookedrooms as $bookedroom)
                                            <tr class="odd gradeX">
                                                <td> {{ $i++ }} </td>
                                                <td> {{ $bookedroom->meeting_dates }} </td>
                                                <td> {{ $bookedroom->affordable_time }} </td>
                                                <td> {{ $bookedroom->location }} </td>
                                                
                                            </tr>
                                        @endforeach

                                       
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

