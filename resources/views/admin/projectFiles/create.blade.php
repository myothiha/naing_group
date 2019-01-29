@extends('admin.layouts.back')

@section('title', 'Page Title')

@section('heading', 'Project File')

@section('subheading', 'Create')

<!-- Breadcrumb Section -->
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            Index
        </li>
        <li class="breadcrumb-item">
            <a href="{{ action('ProjectController@index') }}">List</a>
        </li>

        <li class="breadcrumb-item active">
            <a href="#"><b>Create New Project File</b></a>
        </li>
    </ol>
@endsection

@section('content')

   
    <section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('ProjectController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Upload</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Add New Upload</h6>
        </div>

        <div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                            <div class="title_box sm-header-style-1">
                                
                                <h6 class="sm-header">
                                   Upload Form
                                </h6>
                            </div>
                            <div class="sm-box">
                                 <form action="{{ action('ProjectFileController@store', $project->id) }}" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}

                                    <div class="form-group row">
                                        <label for="type" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Project Title">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="type" class="col-sm-2 col-form-label">File</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="filename" id="filename">
                                            <input type="file" class="form-control" id="file" name="file" onchange="uploadFile()" placeholder="Upload Project File">
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" id="progress" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>


                                    <h3 id="status"></h3>
                                    <p id="loaded_n_total"></p>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script type="application/javascript">
        function _(el) {
            return document.getElementById(el);
        }

        function uploadFile() {
            var file = _("file").files[0];
            // alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();
            formdata.append("file", file);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "{{ action('TestController@store') }}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
            //use file_upload_parser.php from above url
            ajax.send(formdata);
        }

        function progressHandler(event) {
            _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progress").style.width = Math.round(percent) + "%";
            _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
        }

        function completeHandler(event) {
            _("status").innerHTML = "Upload Complete";
            _("filename").value = event.target.responseText;
            _("file").value = "";
            _("progressBar").value = 0; //wil clear progress bar after successful upload
        }

        function errorHandler(event) {
            _("status").innerHTML = "Upload Failed";
        }

        function abortHandler(event) {
            _("status").innerHTML = "Upload Aborted";
        }
    </script>
@endsection
