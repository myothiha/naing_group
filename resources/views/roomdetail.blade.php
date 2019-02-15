@extends('layouts.front')
@section('content')
@include('layouts.menu')

<section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Project Name</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 3D condo -->
    <div id="carouselExampleIndicators" class="carousel slide banner" data-ride="carousel">
        <div class="carousel-inner banner-inner">
            
            @if(!empty($roomimages))
            @foreach($roomimages as $key => $roomimage)

            <div class="carousel-item {{ $key ==0 ? "active" : "" }}">
                <img class="d-block w-100 " src="{{ $roomimage->image }}" alt="First slide">

            </div>
            
            @endforeach
            @endif
            
        </div>

        <div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>
    <!-- <section>
        <img src="{{ Request::root() }}/images/project-details.jpg" alt="" class="img-fluid condo">
    </section> -->

    <div class="container my-3">
        <div class="row p-3">
        @if( $room->status == 1 )
            <div class="col-md-8">
                <h2> Thanks For Your Interesting.</h2>
                <h6> It is sold out!!</h6>
            </div>
        @else      
            <div class="col-md-8">
                <h2 class="my-5 properties-title"> {{ $room->name }} </h2><span class="forsale">For Sale</span>
                <div class="my-3">
                    <h5 class="price mt-2">{{ $room->price }} Lkhs </h5><span class="sq"> {{ $room->width }}</span>

                </div>
                <p class="my-3">
                    <!-- Address : 5078 Jensen Key, Port Kaya, WV 73505 -->
                    <a href="/customer/room/{{ $room->id }}/booking/create" class = "btn btn-primary"> Book Now </a>
                </p>

            
                <h5 class="my-3">Description</h5>
                <p>
                    {{ $room->description }}
                </p>
                <hr>

                <h5 class="my-3">Property Details</h5>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="property-list">
                            <li>Property Size<span class="list-style"></span> {{ $room->width }} <span class="list-sq"></span></li>
                            <li>Bedrooms<span class="list-style"></span> {{ $room->bedroom }} </li>
                            <!-- <li>Property Size<span class="list-style"></span><span class="list-price"></span>  </li> -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="property-list">
                            <li>Property Type<span class="list-style"></span>6</li>
                            <li>Bathrooms<span class="list-style"></span>{{ $room->bathroom }}</li>
                            <!-- <li>Building Age<span class="list-style"></span>2 <span class="list-year"></span></li> -->
                        </ul>

                    </div>
                    <div class="col-md-4">
                        <ul class="property-list">
                            <li>Property Type<span class="list-style"></span><span class="list-sale"></span></li>
                            <li>Property Size<span class="list-style"></span>300<span class="list-sq"></span></li>
                        </ul>
                    </div>
                </div>
                <hr>


                <h5 class="my-3">Property Features</h5>
                <div class="row">
                    @foreach($room->feature as $feature)

                    <div class="col-md-4">
                        <div class = "room-feature">
                           <ul class="property-list">
                            <li><span class="{{ $feature->icon }}"></span> {{ $feature->name }} </li>
                          </ul>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <hr>

                <h5 class="my-3">Floor Plans</h5>
                <section class="gallery-block grid-gallery" data-aos="fade-up">
                    <div class="col-12 item">
                        @foreach($floor_plans as $floorplan)
                        <a class="lightbox" href="{{ $floorplan->floor_plans}}" data-aos="fade-left">
                            <img class="img-fluid image scale-on-hover" src="{{ $floorplan->floor_plans}}">
                        </a>
                        @endforeach
                    </div>
                </section>


                <hr>

                <!-- <h5 class="my-3">Property Video</h5>
                   <iframe width="560" height="315" src="{{ $room->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr> -->

                <div class="row">
                    <div class="col-md-4">
                        <h5>Contact Me</h5>
                        <ul class="agent-list">
                            <li>{{ $contact->mail ?? 'No Data' }}</li>
                            <li> {{ $contact->phone ?? 'No Data' }} </li>

                            <div class="agent-social">
                                <i class="fab fa-facebook-f mx-1"></i>
                                <i class="fab fa-google-plus-g mx-1"></i>
                                <i class="fab fa-twitter mx-1"></i>
                            </div>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <div class="form-row my-3">
                                <div class="col">

                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Massage" rows="3"></textarea>

                                </div>

                            </div>

                            <button type="button" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif

            <div class="col-md-4">
                <h2 class="title my-5">Search Properties</h2>
                <form action="/search" method = "POST">
                    {{ csrf_field() }}
                    <select class="form-control form-control mt-3 slect" name = "status">
                        <option value = "">Status</option>
                        @foreach($status as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach
                      </select>
                    <select class="form-control form-control my-2 slect" name = "city">
                        <option value = ""> City </option>
                        @foreach($cities as $data )
                            <option value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach
                      </select>
                    <select class="form-control form-control mb-2 slect" name = "type">
                        <option value = ""> Type </option>
                        @foreach($types as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach                            
                      </select>

                    <!-- Range slider: -->
                    <div class="form-group range">
                        <label for="formControlRange">MMK(Lakh)- <span><output id="js-output"></output></span></label>
                        <input type="text" name = "price" class = "form-control">
                       
                    </div>
                     <!-- <input type="range" class="form-control-range" id="formControlRange" min="10" // default 0 max="1000" // default 100 step="10" // default 1 value="300" // default min + (max-min)/2 data-orientation="vertical" // default horizontal> -->

                    <button type="submit" class="btn btn-primary btn-block mb-3">Search Now</button>

                </form>

                <h2 class="title my-5">Featured Properties</h2>
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
                <img src="images/giude.jpg" alt="" class="img-fluid my-3">

            </div>
        </div>
    </div>
@endsection
