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
            <h6 class="sm-pagetitle--style-1 has_page_title">DataTables Index Data</h6>
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
                                    DataTables Index Data
                                </h6>
                            </div>
                            <div class="sm-box">
                                

                                @if ($indexdatas->count() < 1)
                                    <div id="toolbar" style="margin-bottom: 10px;">
                                        <button id="remove" class="btn btn-warning">
                                            <i class="ion-ios-plus"></i><a href="{{ action("IndexdataController@create") }}"> Add New
                                            </a></button>
                                    </div>
                                @endif
                                

                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Total Project</th>
                                        <th>Total Staff</th>
                                        <th>Total Investment</th>
                                        <th>Total Taxation</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                        @foreach($indexdatas as $indexdata)

                                            <tr class="odd gradeX">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $indexdata->title }}</td>
                                                <td>{{ $indexdata->description }}</td>
                                                <td>{{ $indexdata->project }}</td>
                                                <td>{{ $indexdata->staff }}</td>
                                                <td>{{ $indexdata->investment }}</td>
                                                <td>{{ $indexdata->taxation }}</td>
                                                <td>
                                                    <form action="{{action('IndexdataController@destroy',        $indexdata->id) }}" method="Post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-warning mb-2" href="{{action('IndexdataController@edit',        $indexdata->id) }}">Edit</a>

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