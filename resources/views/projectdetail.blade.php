@extends('layouts.front')

@section('css')
    <link rel="stylesheet" href="https://developer.api.autodesk.com/modelderivative/v2/viewers/6.*/style.min.css"
          type="text/css">
@endsection

@section('content')

    @include('layouts.menu')

    <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/project">Project</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $project->name }}</li>
                </ol>
            </nav>
        </div>
    </section>


    <!-- 3D condo -->
    <div>
        <img src="{{ $project->banner_image }}" alt="" class="img-fluid condo">
    </div>

    <div class="container my-3">

        <div class="row p-3">

            <div class="col-md-8">
                <h2 class="title my-5">{{ $project->name }}</h2>
                <p class="my-3">
                    {{ $project->description }}
                </p>

                {{--<ul class="project-list">
                    <li><span class="project-listinfo">Address</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Location</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Building</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Car Park</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Total Lift</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Facilities</span><span class="project-infotext">Gymnasium , Activities Room , Dancing Room , Yoga , Sauna Room , Jacuzzi , Function Room , Business Centre and Swimming Pool.</span>
                    </li>
                </ul>--}}

                <h5 class="my-3">CEP Rooms</h5>

                <div class="collp">
                    <div id="accordion" class="accordion">
                    @php
                      $no = 1;
                      $f = $project->floor
                    @endphp  
                        <div class="mb-0">
                    @for($i = 1; $i<= $f ; $i++)

                            <div class="card-header collapsed" data-toggle="collapse" href="#a{{ $no }}">
                                <a class="card-title">
                                    {{ $i }} Floor
                                </a>
                            </div>
                            <div id="a{{ $no++ }}" class="card-body collapse" data-parent="#accordion">
                                <div class="card-body">
                                    @if(empty($rooms))
                                    <h3> There is no data </h3>
                                    @else
                                    @foreach($rooms as $room)
                                     @if($i == $room->floor)
                                        <a href="/roomdetail/{{ $room->id }}">
                                            <div class="room sale"> {{ $room->name }} <span></span></div>
                                        </a>
                                     @endif   
                                    @endforeach
                                    @endif
                                </div>                              

                                <!-- <div class="room sold"> {{ $room->name }}  <span></span></div> -->
                            </div>  
                    @endfor

                        </div>
                    </div>

                    <!-- panel-group -->
                </div>

                <h5 class="my-3">Facilities</h5>
                <div class="row">

                    @foreach($project->facilities as $facility)
                        <div class="d-fex facilities-icon">
                            <i class="{{ $facility->icon }} fa-3x"></i><br>
                            <span class="facilities-text">{{ $facility->name }}</span>
                        </div>
                    @endforeach

                </div>

                <h5 class="my-3">Map</h5>
                <div class="map">
                    {!! $project->map !!}
                </div>

            </div>

            <div class="col-md-4">
                <h2 class="title my-5">Search Properties</h2>
                <form>

                    <select class="form-control form-control mt-3 slect">
                        <option>Status</option>
                        <option>Yangon</option>
                        <option>Mandalay</option>
                    </select>
                    <select class="form-control form-control my-2 slect">
                        <option>Type</option>
                        <option>Yangon</option>
                        <option>Mandalay</option>
                    </select>
                    <select class="form-control form-control mb-2 slect">
                        <option>City</option>
                        <option>Yangon</option>
                        <option>Mandalay</option>
                    </select>

                    <!-- Range slider: -->
                    <div class="form-group range">
                        <label for="formControlRange">MMK(Lakh)- <span><output id="js-output"></output></span></label>
                        <input type="range" class="form-control-range" id="formControlRange" min="10"/>
                        {{--// default 0 max="1000" // default 100 step="10"
                        // default 1 value="300" // default min + (max-min)/2 data-orientation="vertical"
                        // default horizontal>--}}
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-3">Search Now</button>

                </form>

                <h2 class="title my-5">Featured Properties</h2>
                <div class="row my-3">
                    <div class="col-5">
                        <img src="images/erc.jpg" alt="" class="img-fluid"/>
                    </div>
                    <div class="col-7">
                        <h6>Featured Properties Name</h6>
                        <p>Yangon, No 123 , Maharbandoola Rd, Pabadan Township.</p>
                        <button type="button" class="btn btn-primary btn-block">Price on request</button>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-5">
                        <img src="images/erc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <h6>Featured Properties Name</h6>
                        <p>Yangon, No 123 , Maharbandoola Rd, Pabadan Township.</p>
                        <button type="button" class="btn btn-primary btn-block">Price on request</button>

                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-5">
                        <img src="images/erc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <h6>Featured Properties Name</h6>
                        <p>Yangon, No 123 , Maharbandoola Rd, Pabadan Township.</p>
                        <button type="button" class="btn btn-primary btn-block">Price on request</button>

                    </div>
                </div>

                <h2 class="title my-5">Our Guides</h2>
                <img src="/images/giude.jpg" alt="" class="img-fluid my-3">
            </div>

        </div>

    </div>

@endsection
