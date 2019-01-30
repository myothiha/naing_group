@extends('layouts.front')

@section('content')

@include('layouts.menu')

 <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3" data-aos="fade-left">
        <div class="row p-3">
            <h2 class="title">About Us</h2>
               @if(empty($about))
                <h3> There is no Data </h3>
             @else
            <p>{{ $about->about }}
            </p>
             @endif
        </div>
    </div>

    <section id="vision" class="py-4">
        <div class="inner my-4">
            <div class="copy py-4">
                <div class="container my-4" data-aos="fade-right">
                    <div class="row">
                        <h4>Our Vision</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 vision-textarea">
                            @if(empty($about))
                            <p> There is no Data </p>
                            @else
                            <p>{{ $about->vision }}</p>
                            @endif               
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <!-- Our Mission -->
    <section>
        <div class="container-fluid mission-section">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 mission-img">
                    <img src="images/vision.jpg" alt="" class="img-fluid" data-aos="fade-right">
                </div>
                <div class="col-md-8 p-5">
                    <div class="my-2" data-aos="fade-left">
                        <h4>OUR MISSION</h4>
                        <p class="mission-textarea">
                            @if(empty($about))
                            <p> There is no Data </p>
                            @else
                            <p>{{ $about->mission }}</p>
                            @endif    
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <h4>CORE VALUE</h4>
            </div>

            <div class="row d-flex justify-content-center my-3" data-aos="fade-down">
                <div class="col-md-2 col-6">
                    <div class="core-valueico"><i class="fas fa-4x fa-handshake my-2"></i></div>
                    <p class="text-center">Trust</p>
                </div>

                <div class="col-md-2 col-6">
                    <div class="core-valueico"><i class="fas fa-4x fa-users my-2"></i></div>
                    <p class="text-center">Customer Satisfaction</p>
                </div>
                <div class="col-md-2 col-6">
                    <div class="core-valueico"><i class="fas fa-4x fa-file-signature my-2"></i></div>
                    <p class="text-center">Commitment</p>
                </div>
                <div class="col-md-2 col-6">
                    <div class="core-valueico"><i class="fas fa-4x fa-balance-scale my-2"></i></div>
                    <p class="text-center">Integrity</p>
                </div>
                <div class="col-md-2 col-6">
                    <div class="core-valueico"><i class="fas fa-4x fa-align-center my-2"></i></div>
                    <p class="text-center">Flexibility</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 gray">
        <div class="container my-4">
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <h2 class="title">About Us</h2>
            </div>
            <div class="row" data-aos="fade-down">
                @if(empty($about))
                <h3> There is no Data </h3>
                @else
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
                @endif
                
            </div>
        </div>
    </section>


@endsection