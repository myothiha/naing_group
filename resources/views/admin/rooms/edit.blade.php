@extends('admin.layouts.back')

@section('content')

    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ action('RoomTypeController@index') }}">DataTable</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Room Form</li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Edit Room Form</h6>
            </div>

            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                                <div class="title_box sm-header-style-1">
                                    
                                    <h6 class="sm-header">
                                        Edit Room Form
                                    </h6>
                                </div>
                                <div class="sm-box">
                                    <form class="form-default"
                                          action="{{ action('RoomController@update', [ $project->id, $room->id]) }}"
                                          method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">

                                        <hr class="m-t-0">
                                        <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label for="name">Name</label>
    		                                        <input name="name" placeholder="Enter name of Name "
    		                                               type="text" class="form-control" value="{{ $room->name }}">
    		                                    </div>
    		                                </div>
    		                            </div>
                                        <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label>Project</label>
    		                                        <input name="project_name" value="{{ $project->name }}"
    		                                               type="text" class="form-control" disabled>
    		                                    </div>
                                                <div class="form-group">
    		                                        <input name="project_id" value="{{ $project->id }}"
    		                                               type="text" class="form-control" hidden>
    		                                    </div>
    		                                </div>
    		                            </div>
                                        <div class="row">
    		                                <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" name="description" rows="3">{{ $room->description }}</textarea>
                                                </div>
    		                                </div>
    		                            </div>
                                        <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label for="price">Price</label>
    		                                        <input name="price" placeholder="Enter name of Price "
    		                                               type="text" class="form-control" value="{{ $room->price }}">
    		                                    </div>
    		                                </div>
    		                            </div>
                                        <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label for="width">Width</label>
    		                                        <input name="width" placeholder="Enter name of Width "
    		                                               type="text" class="form-control" value="{{ $room->width }}">
    		                                    </div>
    		                                </div>
    		                            </div>
                                        <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label for="bedroom">Bedroom</label>
    		                                        <input name="bedroom" placeholder="Enter name of Bedroom "
    		                                               type="text" class="form-control" value="{{ $room->bedroom }}">
    		                                    </div>
    		                                </div>
    		                            </div>
                                        <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label for="bathroom">Bathroom</label>
    		                                        <input name="bathroom" placeholder="Enter name of Bathroom "
    		                                               type="text" class="form-control" value="{{ $room->bathroom }}">
    		                                    </div>
    		                                </div>
    		                            </div>
                                      @php  $f = $project->floor @endphp  

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="floor">Floor</label>
                                                        <select name="floor" class = "form-control">
                                                            @for($i=1; $i<=$f ; $i++ )
                                                            <option value="{{ $i }}"> {{ $i }}  Floor </option>
                                                            @endfor
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
    		                                <div class="col-12">
    		                                    <div class="form-group">
    		                                        <label for="video">Video</label>
    		                                        <input name="video" placeholder="Enter name of Video "
    		                                               type="text" class="form-control" value="{{ $room->video }}">
    		                                    </div>
    		                                </div>
    		                            </div>
                                         --> 
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="status"> Status </label>
                                                    <select name="status" class="form-control" type="select">
                                                       <option value="" class = "form-control"> Select One </option>
                                                       <option value="0" {{ $room->status == 0 ? 'selected' : '' }}> Sale </option>
                                                       <option value="1" {{ $room->status == 1 ? 'selected' : '' }} >  Sold  </option>
                                                       <option value="2" {{ $room->status == 2 ? 'selected' : '' }} > Faiclity Room </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                       
                                         <div class="row">
                                            <div class="col-lg-12">
                                                <label for="status">Facility</label>
                                                @php $no=1 @endphp
                                                @foreach($roomfeatures as $roomfeature)
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkRemember{{ $no }}" name="roomfeature[]"
                                                               value="{{ $roomfeature->id }}"
                                                                @foreach($roomfeatureid as $data)
                                                                {{ $roomfeature->id == $data->room_feature_id ? 'checked' : ''}}
                                                                @endforeach>
                                                        <label for="chkRemember{{ $no++ }}">{{ $roomfeature->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="row m-t-20">
                                            <div class="col-lg-12">
                                                <input type="submit" class="btn btn-primary" value="Update">
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
