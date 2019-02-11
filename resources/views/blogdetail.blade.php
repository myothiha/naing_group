@extends('layouts.front')

@section('content')

@include('layouts.menu')

 <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
       

        <div class="row">
            <div class="col-md-8">
                <div class="">
                   <i class="fas fa-calendar-alt"></i><span class="date"> </span> 
                   <span class="">
                        @if(empty($blog))
                            <p> There is no Data </p>
                            @else
                            <p>{{ $blog->author }}</p>
                     @endif
                   </span>
                </div>
                <img src="{{ $blog->featureimage }}" alt="" class="img-fluid" data-aos="fade-up">
                <p class="pt-4" data-aos="fade-down">
                     @if(empty($blog))
                            <p> There is no Data </p>
                            @else
                            <p>{{ $blog->description }}</p>
                     @endif
                </p>


                <!-- ACCOMMODATION -->
                <section class="gallery-block grid-gallery" data-aos="fade-up">
                    <div class="container">
                        <h6 class="" data-aos="fade-right">Blog Gallery</h6>

                        <div class="row">
                            @if(empty($blog))
                                <h3> There is no Data </h3>
                            @else
                            @foreach($blog->blogimages as $image)
                            <div class="col-md-4 col-6 item my-1">
                                <a class="lightbox" href="{{ $image->image }}" data-aos="fade-left">
                                    <img class="img-fluid image scale-on-hover" src="{{ $image->image }}">
                                </a>
                            </div>
                            @endforeach
                            @endif
                            

                        </div>

                    </div>
                </section>
            </div>

            <div class="col-md-4" data-aos="fade-down">
                <h2 class="title">CATEGORIES</h2>

                <ul class="nav flex-column my-2">
                    @if(empty($blogcategorys))
                        <h3> There is No Data </h3>
                    @else
                    @foreach($blogcategorys as $blogcategory)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ $blogcategory->name }}</a>
                    </li>
                    @endforeach
                    @endif
                    
                </ul>

                <h2 class="title">POPULAR TAGS</h2><br>

                <div class="my-3">
                    @if(empty($tags))
                    <h3> There is No Data </h3>
                    @else
                    @foreach($tags as $tag)
                    <a class="btn btn-primary my-1" href="#">{{ $tag->name }}</a>
                    @endforeach
                    @endif
                    
                </div>


            </div>
        </div>



    </div>



    <section class="joyus py-4">
        <div class="container my-4">
            <h6 class="text-white" data-aos="fade-down">RELATED Our Blog</h6>
            <div class="row" data-aos="fade-up">               
                @if(empty($blogs))
                 <h3> There is no Data </h3>
                @else
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <a href="/blogdetail/{{ $blog->id }}">
                    <img src="{{ $blog->featureimage }}" alt="" class="img-fluid border border-secondary">
                    <div class="date-tiem">
                        <div class="date-ico"><i class="fas fa-calendar-alt"></i></div>
                        <div class="time"><span class="date"></span> <span class="text-white">{{ $blog->created_at->subMonth()->format('F') }}</span></div>
                    </div>
                    <h6 class="text-white my-3">{{ $blog->title }}</h6>
                    <p class="text-white">{!! substr(strip_tags($blog->description), 0, 400) !!}</p>

                    </a>
                </div>

                @endforeach
                @endif
                
            </div>
        </div>
    </section>

@endsection