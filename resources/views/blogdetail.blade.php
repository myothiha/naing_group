@extends('layouts.front')

@section('content')

@include('layouts.menu')

 <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row" data-aos="fade-left">
            <h2 class="title">{{ $blog->title }} </h2>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class=""><i class="fas fa-calendar-alt"></i><span class="date">{{ $blog->created_at }}</span> <span class="">{{ $blog->author }}</span></div>
                <img src="{{ $blog->featureimage }}" alt="" class="img-fluid" data-aos="fade-up">
                <p class="pt-4" data-aos="fade-down">
                    {{ $blog->description }}
                </p>


                <!-- ACCOMMODATION -->
                <section class="gallery-block grid-gallery" data-aos="fade-up">
                    <div class="container">
                        <h6 class="" data-aos="fade-right">Blog Gallery</h6>

                        <div class="row">
                            <div class="col-md-4 col-6 item">
                                <a class="lightbox" href="img/image1.jpg" data-aos="fade-left">
                                    <img class="img-fluid image scale-on-hover" src="img/image1.jpg">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 item">
                                <a class="lightbox" href="img/image2.jpg" data-aos="fade-left">
                                    <img class="img-fluid image scale-on-hover" src="img/image2.jpg">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 item">
                                <a class="lightbox" href="img/image3.jpg" data-aos="fade-left">
                                    <img class="img-fluid image scale-on-hover" src="img/image3.jpg">
                                </a>
                            </div>

                        </div>

                    </div>
                </section>
            </div>

            <div class="col-md-4" data-aos="fade-down">
                <h2 class="title">CATEGORIES</h2>

                <ul class="nav flex-column my-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">BUSINESS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">INVESTMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ACCOUNTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TAXES & TERMS</a>
                    </li>
                </ul>

                <h2 class="title">POPULAR TAGS</h2><br>

                <div class="my-3">
                    <a class="btn btn-primary my-1" href="#">Money</a>
                    <a class="btn btn-primary my-1" href="#">Investments</a>
                    <a class="btn btn-primary my-1" href="#">Business</a>
                    <a class="btn btn-primary my-1" href="#">Stocks</a>
                    <a class="btn btn-primary my-1" href="#">Idea</a>
                    <a class="btn btn-primary my-1" href="#">Employee</a>
                    <a class="btn btn-primary my-1" href="#">Solutions</a>
                    <a class="btn btn-primary my-1" href="#">Team</a>
                </div>


            </div>
        </div>



    </div>



    <section class="joyus py-4">
        <div class="container my-4">
            <h6 class="text-white" data-aos="fade-down">RELATED Our Blog</h6>
            <div class="row" data-aos="fade-up">
                <div class="col-md-4">
                    <a href="">
                        <img src="images/detail-01.jpg" alt="" class="img-fluid border border-secondary">
                        <div class="date-tiem">
                            <div class="date-ico"><i class="fas fa-calendar-alt"></i></div>
                            <div class="time"><span class="date">21</span> <span class="text-white">Dec 2018</span></div>
                        </div>

                        <h6 class="text-white my-3">RELATED CSR TITLE</h6>
                        <p class="text-white">Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <img src="images/detail-01.jpg" alt="" class="img-fluid border border-secondary">
                    <div class="date-tiem">
                        <div class="date-ico"><i class="fas fa-calendar-alt"></i></div>
                        <div class="time"><span class="date">21</span> <span class="text-white">Dec 2018</span></div>
                    </div>
                    <h6 class="text-white my-3">RELATED CSR TITLE</h6>
                    <p class="text-white">Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam</p>
                </div>
                <div class="col-md-4">
                    <img src="images/detail-01.jpg" alt="" class="img-fluid border border-secondary">
                    <div class="date-tiem">
                        <div class="date-ico"><i class="fas fa-calendar-alt"></i></div>
                        <div class="time"><span class="date">21</span> <span class="text-white">Dec 2018</span></div>
                    </div>
                    <h6 class="text-white my-3">RELATED CSR TITLE</h6>
                    <p class="text-white">Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam</p>
                </div>
            </div>
        </div>
    </section>

@endsection