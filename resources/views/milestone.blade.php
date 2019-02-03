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
                <h2 class="page-title my-5">Our Milestones</h2>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row my-4">
        @foreach($milestones as $milestone)
            <div class="col-md-3" data-toggle="modal" data-target="#mondstone{{ $milestone->id}}">
                <div class="card" data-aos="fade-up">
                    <img class="mindstone-img img-fluid" src="{{ $milestone->image }}" alt="Card image cap">
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="mondstone{{ $milestone->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title prson-title" id="exampleModalLongTitle">{{ $milestone->title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img class="img-fluid prson-img" src="{{ $milestone->image }}" alt="Card image cap">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h5 class="prson-name">Project Descption</h5>
                                    <p>{{ $milestone->description }}

                                    </p>
                                    <h5 class="prson-name">LOCATION</h5>
                                    <p>{{ $milestone->location }}</p>
                                    <h5 class="prson-name">COMPLECTION DATE</h5>
                                    <p>{{ $milestone->date }}</p>
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
        </div>
    {{ $milestones->links() }}
    </div>
    

@endsection