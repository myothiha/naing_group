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
                <h6 class="sm-pagetitle--style-1 has_page_title">DataTables Project</h6>
            </div>
            <!--END BREADCRUMB-->

            <!--BEGIN PAGE CONTENT-->
            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper">
                                <div class="title_box sm-header-style-1">
                                    <div class="sm-actions">
                                        <a href="javascript:void(0)"
                                           class="tooltip_cus fullscreen_element">
                                            <span class="extra-tooltip">Fullscreen</span>
                                            <i class="material-icons">fullscreen</i>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="tooltip_cus refresh_element">
                                            <span class="extra-tooltip">Refresh</span>
                                            <i class="material-icons">refresh</i>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="tooltip_cus minimize_element">
                                            <span class="extra-tooltip">Collapse / Expand</span>
                                            <i class="material-icons">import_export</i>
                                        </a>
                                        <a href="javascript:void(0)" class="tooltip_cus remove_element">
                                            <span class="extra-tooltip">Remove</span>
                                            <i class="material-icons">close</i>
                                        </a>
                                    </div>
                                    <h6 class="sm-header">
                                        DataTables Project
                                    </h6>
                                </div>
                                <div class="sm-box">


                                    <div id="toolbar" style="margin-bottom: 10px;">
                                        <a id="remove" class="btn btn-warning"
                                           href="{{ action('ProjectController@create') }}">
                                            <i class="ion-ios-plus"></i> Add New
                                        </a>
                                    </div>


                                    <table id="data-table" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Feature Image</th>
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>3D File</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; ?>
                                        @foreach($projects as $project)

                                            <tr class="odd gradeX">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->description }}</td>
                                                <td width="10%"><img src="{{ $project->feature_image }}"
                                                                     class="img-fluid"></td>
                                                <td>{{ $project->project_statuses->name }}</td>
                                                <td>{{ $project->cities->name }}</td>
                                                <td>{{ $project->project_types->name }}</td>

                                                <td>
                                                    @if ($project->file_status==\App\Constant::NO_FILE)
                                                        <a class='btn btn-primary'
                                                           href="{{ action('ProjectFileController@create', $project->id) }}">Upload</a>
                                                    @elseif ($project->file_status==\App\Constant::COMPLETE)
                                                        <a class='btn btn-primary'
                                                           href="{{ action('ProjectFileController@show', $project->projectFile->id) }}">View</a>
                                                    @else
                                                        {{ $project->file_status }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ action('ProjectController@destroy', $project->id) }}"
                                                          method="Post">

                                                        <input type="hidden" name="_method" value="delete">

                                                        {{ csrf_field() }}

                                                        <a class="btn btn-warning"
                                                           href="{{action('RoomController@index', $project->id) }}">Rooms</a>

                                                        <a class="btn btn-warning"
                                                           href="{{action('ProjectController@edit', $project->id) }}">Edit</a>

                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </form>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>

                                    {{ $projects->links() }}

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
