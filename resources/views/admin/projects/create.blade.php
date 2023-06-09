@extends('admin.layouts.back')

@section('content')


    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ action('ProjectController@index') }}">DataTable</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Project Form</li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Add New Project Form</h6>
            </div>

            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                                @include('errors.list')
                                
                                <div class="title_box sm-header-style-1">
                                    
                                    <h6 class="sm-header">
                                        Project Form
                                    </h6>
                                </div>
                                <div class="sm-box">
                                    <form action="{{ action('ProjectController@store') }}" method="post"
                                          enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <hr class="m-t-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">Project Name</label>
                                                    <input name="name" placeholder="Enter Project Name "
                                                           type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" placeholder="Enter Description "
                                                              type="text" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="map">Map</label>
                                                    <textarea type="text" name="map" placeholder="Enter Map Location"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="image">Feature Image</label>
                                                    <input type="file" name="feature_image" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="image">Banner Image</label>
                                                    <input type="file" name="banner_image" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="floor">Floor</label>
                                                    <input name="floor"
                                                           placeholder="Enter total Number of Floor For that Project"
                                                           type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input name="price" placeholder="Enter Price "
                                                           type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="price">Priority</label>
                                                    <input name="priority" placeholder="Priority"
                                                           type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="layout">Layout</label>
                                                    <select name="layout" class="form-control" type="select">
                                                        <option value="4">4 Column</option>
                                                        <option value="8">8 Column</option>
                                                        <option value="12">12 Column</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <select name="city_id" class="form-control" type="select">
                                                        <option>select one</option>
                                                        @foreach($cities as $city)
                                                            <option value="{{ $city->id }}">{{ $city->name }}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="type">Type</label>
                                                    <select name="project_type_id" class="form-control" type="select">
                                                        <option>select one</option>
                                                        @foreach($project_types as $projecttype)
                                                            <option
                                                                value="{{ $projecttype->id }}">{{ $projecttype->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select name="project_status_id" class="form-control" type="select">
                                                        <option>select one</option>
                                                        @foreach($project_statuses as $status)
                                                            <option
                                                                value="{{ $status->id }}">{{ $status->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="status">Facility</label>                                              
                                                    @php $no = 1; @endphp
                                                    @foreach($facilities as $facility)
                                                    <div class = "checkbox">
                                                        <input type="checkbox" id = "facility{{ $no }}" value = "{{ $facility->id }}" name = "facilities[]">
                                                        <label for = "facility{{ $no++ }}"> {{ $facility->name }} </label>
                                                    </div>
                                                    @endforeach

                                            </div>
                                        </div>

                                        <div class="row m-t-20">
                                            <div class="col-lg-12">
                                                <input type="submit" class="btn btn-primary" value="Add New">
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
