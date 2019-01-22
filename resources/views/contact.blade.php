@extends('layouts.front')

@section('content')

@include('layouts.menu')

<!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Map -->
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15280.361371573037!2d96.15566022979336!3d16.772180292099186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e7f29b352592617!2sNAING+GROUP+Construction+Company+Limited!5e0!3m2!1sen!2smm!4v1544594487469 "
            width="100% " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
    </section>

    <div class="container my-3">
        <div class="row p-3">
            <div class="col-md-12">
                <h2 class="title my-5" data-aos="fade-left">Contact Us</h2>

                <div class="row my-3">
                    <div class="col-md-4" data-aos="fade-right">
                        <ul class="agent-list">
                            <li>Real Estate Broker </li>
                            <li>ayour@hotmaila.com
                            </li>
                            <li>(000) 000-0000</li>
                            <div class="agent-social">
                                <i class="fab fa-facebook-f mx-1"></i>
                                <i class="fab fa-google-plus-g mx-1"></i>
                                <i class="fab fa-twitter mx-1"></i>
                            </div>
                        </ul>
                    </div>
                    <div class="col-md-8" data-aos="fade-left">
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
        </div>
    </div>


@endsection