@extends('layouts.front')

@section('content')

@include('layouts.menu')

  <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our People</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <div class="col-md-12">
                <h2 class="page-title my-5">Our People</h2>
                <p class="my-4">
                   
                </p>
            </div>
        </div>
    </div>

    <section class="mission-section py-4">
        <div class="container py-4">

            <div class="row d-flex justify-content-center">
                <h4 class="">Founder and Executive Chairman's</h4>
            </div>
            @if(empty($founder))
                <h3> There is no Data</h3>
            @else            
            @foreach($founder as $data)
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-3" data-toggle="modal" data-target="#founder{{ $data->id }}">
                    <div class="card people" data-aos="fade-up">
                        <img class="card-img-top person" src="{{ $data->image }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <h6 class="card-postion">{{ $data->position }}</h6>
                            <div class="prson-social my-2">
                                <i class="fab fa-facebook-f mx-2"></i>
                                <i class="fab fa-google-plus-g mx-2"></i>
                                <i class="fab fa-twitter mx-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="founder{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title prson-title" id="exampleModalLongTitle">My Biography</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img class="img-fluid prson-img" src="{{ $data->image }}" alt="Card image cap">
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <h5 class="prson-name">{{ $data->name }}</h5>
                                        <p class="prson-postion">{{ $data->position }}</p>
                                        <p>{{ $data->biography }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <p class="text-center text-white">©2018 by Naing Group</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endforeach
            @endif

            <!-- Our Honorable Person -->
            <div class="row d-flex justify-content-center">
                <h4 class="">Our Honorable Person</h4>
            </div>
            
            <div class="row d-flex justify-content-center my-4">
           @if(empty($organization))
           <h3> There is no Data</h3>
            @else
            @foreach($organization as $data)
                <div class="col-md-3" data-toggle="modal" data-target="#honorable{{ $data->id }}">
                    <div class="card people" data-aos="fade-up">
                        <img class="card-img-top person" src="{{ $data->image }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <h6 class="card-postion">{{ $data->position }}</h6>
                            <div class="prson-social my-2">
                                <i class="fab fa-facebook-f mx-2"></i>
                                <i class="fab fa-google-plus-g mx-2"></i>
                                <i class="fab fa-twitter mx-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="honorable{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title prson-title" id="exampleModalLongTitle">My Biography</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img class="img-fluid prson-img" src="{{ $data->image }}" alt="Card image cap">
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <h5 class="prson-name">{{ $data->name }}</h5>
                                        <p class="prson-postion">{{ $data->position }}</p>
                                        <p>{{ $data->biography }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <p class="text-center text-white">©2018 by Naing Group</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            </div>
        </div>
    </section>


    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <h4 class="">ORGANIZATION REPRESENTATIVES*</h4>
        </div>
        
        @foreach($represent as $data)
        <div class="row my-4">
            <div class="col-md-3" data-toggle="modal" data-target="#preson{{ $data->id }}">
                <div class="card bg-prson people" data-aos="fade-up">
                    <img class="card-img-top person" src="{{ $data->image }}" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $data->name }}</h5>
                        <h6 class="card-postion">{{ $data->position }}</h6>
                        <div class="prson-social my-2">
                            <i class="fab fa-facebook-f mx-2"></i>
                            <i class="fab fa-google-plus-g mx-2"></i>
                            <i class="fab fa-twitter mx-2"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="preson{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title prson-title" id="exampleModalLongTitle">My Biography</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img class="img-fluid prson-img" src="{{ $data->image }}" alt="Card image cap">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h5 class="prson-name">{{ $data->name }}</h5>
                                    <p class="prson-postion">{{ $data->position }}</p>
                                    <p>{{ $data->biography }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <p class="text-center text-white">©2018 by Naing Group</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>


    <section>
        <div class="container-fluid joyus">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 mission-img">
                    <img src="images/about-pic.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 p-5">
                    <div class="my-2">
                        <h4 class="joy-title">OUR MISSION</h4>
                        <p class="my-3 text-white">
                             @if(empty($about))
                            <h3> There is no data </h3>
                            @else
                            {{ $about->mission }}
                            @endif
                        </p>

                        <h6 class="joyfounder">Founder & Moderator</h6>
                        <p class="my-3 text-white">
                        @if(empty($founders))
                            <h3> There is no data </h3>
                        @else
                        {{ $founders->biography }}
                        @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection