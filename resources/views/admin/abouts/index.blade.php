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
            <h6 class="sm-pagetitle--style-1 has_page_title">DataTables About Us</h6>
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
                                    DataTables About Us
                                </h6>
                            </div>
                            <div class="sm-box">
                                
                                @if($abouts->count() < 1)

                                <div id="toolbar" style="margin-bottom: 10px;">
                                    <a href="{{ action("AboutController@create") }}" class="btn btn-warning">
                                        <i class="ion-ios-plus"></i> Add New
                                    </a>
                                </div>

                                @endif

                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>About Us</th>
                                        <th>Image</th>
                                        <th>Vision</th>
                                        <th>Mission</th>
                                        <th>Core Value</th>
                                        <th>Interior</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                        @foreach($abouts as $about)

                                            <tr class="odd gradeX">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $about->about }}</td>
                                                <td width="15%"><img src="{{ $about->image }}" class="img-fluid"></td>
                                                <td>{{ $about->vision }}</td>
                                                <td>{{ $about->mission }}</td>
                                                <td>{{ $about->value }}</td>
                                                <td>{{ $about->interior }}</td>
                                                <td>
                                                    <form action="{{action('AboutController@destroy',        $about->id) }}" method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-warning mb-2" href="{{action('AboutController@edit',        $about->id) }}">Edit</a>

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