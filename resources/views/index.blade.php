@extends('layouts.front')

@section('content')

@include('layouts.nav')


 <div id="carouselExampleIndicators" class="carousel slide banner" data-ride="carousel">
        <div class="carousel-inner banner-inner">

            @foreach($homeslides as $key => $homeslide)

            <div class="carousel-item {{ $key ==0 ? "active" : "" }}">
                <img class="d-block w-100 " src="{{ $homeslide->image }}" alt="First slide">

                <div class="carousel-caption d-none d-md-block d-flex justify-content-center">
                    <h3 class="banner-title">{{ $homeslide->title1 }}</h3>
                    <h3 class="banner-title">{{ $homeslide->title2 }} </h3>
                    <button type="button" class="btn btn-warning banner-btn"><a href="{{ action('FrontController@project') }}">Check Projects</a></button>

                </div>

            </div>

            @endforeach

            
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


    <div class="container my-5">
        <div class="row py-3">
            <div class="col-md-5">
                <img src="{{ $about->image }}" alt=" " class="img-fluid" data-aos="fade-right">
            </div>
            <div class="col-md-7">
                <h2 class="title" data-aos="fade-right">About Us</h2>
                <p class="my-4" data-aos="fade-up">{{ $about->about }}
                </p>
                <div class="row ">
                    <div class="col-6" data-aos="fade-up">
                        <i class="fas fa-check about-listico"><span class="h5 about-list">Our Vision</span></i>
                        <p class="about-text ">{{ $about->vision }}</p>
                    </div>
                    <div class="col-6" data-aos="fade-up">
                        <i class="fas fa-crosshairs about-listico"><span class="h5 about-list">Our Mission</span></i>
                        <p class="about-text">{{ $about->mission }}</p>

                    </div>
                    <div class="col-6" data-aos="fade-up">
                        <i class="fas fa-check about-listico"><span class="h5 about-list">Core Value</span></i>
                        <p class="about-text ">{{ $about->value }}</p>
                    </div>
                    <div class="col-6" data-aos="fade-up">
                        <i class="fas fa-images about-listico"><span class="h5 about-list">INTERIOR</span></i>
                        <p class="about-text ">{{ $about->interior }}</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section id="latest-project">
        <div class="inner">
            <div class="copy latest-project">

                <div class="container my-4">
                    <div class="row pt-2">
                        <h3 class="title" data-aos="fade-right">LATEST PROJECTS</h3>
                    </div>

                </div>


                <div class="owl-carousel owl-theme">

                    @foreach($projects as $project)

                    <div class="item">
                        <img src="{{ $project->feature_image }}" class="img-fluid" alt="">
                    </div>

                    @endforeach

                    

                </div>
            </div>
    </section>

    <section class="py-5 gray">
        <div class="container my-4">
            <div class="row d-flex justify-content-center">
                <h2 class="title " data-aos="fade-down">WHY CHOOSE US</h2>
            </div>
            <div class="row">

                @foreach($whychoose as $data)
                <div class="col-md-4">
                    <div class="card py-3 " data-aos="fade-up">
                        <div class="card-body text-center">
                            <i class="fas fa-2x {{ $data->icon }} card-icon"></i>
                            <h5 class="card-title text-center my-3">{{ $data->title }}</h5>
                            <p class="card-text text-center">{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
    </section>


    <section id="awwsome-fact">
        <div class="inner">
            <div class="copy awwsome-fact">
                <div class="container my-4">
                    <div class="row mt-5 justify-content-end">
                        <h6 class=" " data-aos="fade-left">The Construction Company</h6>
                    </div>
                    <div class="row justify-content-end">
                        <h1 class=" " data-aos="fade-right">AWESOME FACTS</h1>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-8 " data-aos="fade-down">
                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam
                                sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada.

                            </p>
                        </div>
                    </div>
                    <div class="row my-2 justify-content-end">
                        <div class="col-md-2 col-6 my-2">
                            <span class='numscroller' data-min='1' data-max='6' data-delay='0.7' data-increment='1'>1</span>
                            <img src="/images/project-icon01.png" alt="" class="project-icon">
                            <p class="project-text">Total Project</p>
                        </div>
                        <div class="col-md-2 col-6 my-2">
                            <span class='numscroller' data-min='1' data-max='6' data-delay='0.7' data-increment='1'>1</span>
                            <img src="/images/project-icon02.png" alt="" class="project-icon">
                            <p class="project-text">Total Staffs</p>
                        </div>
                        <div class="col-md-2 col-6 my-2">
                            <span class='numscroller' data-min='1' data-max='10' data-delay='0.7' data-increment='1'>1</span>
                            <img src="/images/project-icon03.png" alt="" class="project-icon">
                            <p class="project-text">Our Investments </p>
                        </div>
                        <div class="col-md-2 col-6 my-2">
                            <span class='numscroller' data-min='1' data-max='20' data-delay='0.7' data-increment='1'>1</span>
                            <img src="/images/project-icon04.png" alt="" class="project-icon">
                            <p class="project-text">Total Project</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Our Business Units -->
    <section class="py-5 gray">
        <div class="container my-4">
            <div class="row d-flex justify-content-center">
                <h2 class="title" data-aos="fade-down">Our Business Units</h2>
            </div>
            <div class="row">
                @foreach($business as $data)
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up">
                        <a href="/businessdetail/{{ $data->id }}">
                        <img class="card-img-top" src="{{ $data->featureimage }} " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-text">{!! substr(strip_tags($data->description), 0, 400) !!}</p>

                        </div>
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ and CSR -->
    <section>
        <div class="col-md-6 half faq-bg py-5" data-aos="fade-left">
            <div class="container my-4">
                <div class="row">
                    <h5 class="title text-white">Frequently Asked Questions</h5>
                </div>
                <div class="">
                    <div id="accordion" class="accordion">
                        <div class="mb-0">
                            @foreach($faq as $data)
                            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                <a class="card-title">
                                                {{ $data->question }}
                                            </a>
                            </div>
                            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                                <p>{{ $data->answer }}
                                </p>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="mt-2 text-right d-flex justify-content-end">
                            <a type="button" class="btn btn-primary " href="/faq">Read More</a>

                        </div>

                    </div>

                    <!-- panel-group -->
                </div>

            </div>
        </div>
        <div class="col-md-6 half py-5 d-flex justify-content-center" id="csr-bg" data-aos="fade-right">
            <div class="container my-4">
                <div class="row">
                    <h5 class="title text-white">Coporate Social Responsibilities</h5>
                    <div class="container my-4">
                        <div class="row my-4">
                            <div class="col-md-12 py-3">
                                <h6 class="title text-white">Contribute to Education Sectors
                                </h6>
                            </div>
                            <div class="col-md-12 py-3">
                                <h6 class="title text-white">Contribute to Health Sectors
                                </h6>
                            </div>
                            <div class="col-md-12 py-3">
                                <h6 class="title text-white">Other grants</h6>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>

    </section>

    <!-- Map -->
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15280.361371573037!2d96.15566022979336!3d16.772180292099186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e7f29b352592617!2sNAING+GROUP+Construction+Company+Limited!5e0!3m2!1sen!2smm!4v1544594487469 "
            width="100% " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
    </section>

@endsection