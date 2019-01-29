@extends('layouts.front')

@section('content')

@include('layouts.menu')


<!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <h2 class="title">Blog</h2>
        </div>

        <div class="row">
            <div class="col-md-8">
                @foreach($blogs as $blog)

                <div class="">
                    <img src="{{ $blog->featureimage }}" class="img-fluid" alt="">
                    <div class="my-3">
                        <div class=""><i class="fas fa-calendar-alt"></i><span class="date">{{ $blog->created_at }}</span> <span class="">{{ $blog->author }}</span></div>
                    </div>
                    <h5 class="d-block">{{ $blog->title }}</h5>
                    <p>{!! substr(strip_tags($blog->description), 0, 400) !!}</p>
                    <a href="/blogdetail/{{ $blog->id }}" class="btn btn-primary float-right mb-4">Read More</a>
                </div>

                @endforeach

               
            </div>
            <div class="col-md-4" data-aos="fade-down">
                <h2 class="title">POPULAR TAGS</h2>

                <ul class="nav flex-column my-2">
                    @foreach($tags as $tag)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ $tag->name }}</a>
                    </li>
                    @endforeach
                    
                </ul>

                <h2 class="title">CATEGORIES</h2><br>

                <div class="my-3">
                    <ul class="nav flex-column my-2">
                        @foreach($blogcategorys as $blogcategory)
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $blogcategory->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>


            </div>

            {{ $blogs->links() }}

        </div>


    </div>

@endsection