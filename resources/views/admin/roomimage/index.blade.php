@extends('admin.layouts.back')

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


                                <div id="toolbar" style="margin-bottom: 10px;">
                                    <button id="remove" class="btn btn-warning">
                                        <i class="ion-ios-plus"></i><a href="/admin/room/{{ $room->id }}/roomimage/create"> Add New
                                    </a></button>
                                </div>


                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                        @foreach($roomimages as $roomimage)
                                            
                                            <tr class="odd gradeX">
                                                <td>{{ $no++ }}</td>
                                                <td><img width="100px" src="{{ $roomimage->image }}" "></td>
                                                <td>
                                                    <form action="/admin/room/{{ $room->id }}/roomimage/{{ $roomimage->id }}" method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-warning" href="/admin/room/{{ $room->id }}/roomimage/{{ $roomimage->id }}/edit">Edit</a>

                                                        <input type="submit" class="btn btn-danger" value="Delete">

                                                    </form>
                                                </td>
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
