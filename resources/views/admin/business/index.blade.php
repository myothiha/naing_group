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
            <h6 class="sm-pagetitle--style-1 has_page_title">DataTables Business Units</h6>
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
                                    DataTables Business Units
                                </h6>
                            </div>
                            <div class="sm-box">
                                

                                <div id="toolbar" style="margin-bottom: 10px;">
                                    <a class="btn btn-warning" href="{{ action("BusinessController@create") }}"><i class="ion-ios-plus"></i> Add New
                                    </a>
                                </div>
                                

                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Feature Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                        @foreach($business as $data)

                                            <tr class="odd gradeX">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->title }}</td>

                                                <td>{{ $data->description }}</td>
                                                <td width="15%"><img src="{{ $data->featureimage }}" class="img-fluid"></td>
                                                
                                                <td>
                                                    <form action="{{action('BusinessController@destroy',        $data->id) }}" method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-dark"
                                                        href="{{ action('BusinessimageController@index', $data->id) }}">Images</a>
                                                        <a class="btn btn-warning mb-2" href="{{action('BusinessController@edit',        $data->id) }}">Edit</a>

                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </form>
                                                </td>
                                            </tr>

                                        @endforeach                                    
                                    </tbody>
                                </table>

                                {{ $business->links() }}
                                
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