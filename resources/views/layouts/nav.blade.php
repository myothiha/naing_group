<header class="fixed-top">
    <!-- infonav bar -->
    <div class="" id="hidable">
        <div class="container">
            <div class="row p-2">
                <div class="col-12 home-index">
                    <ul class="nav m-2 social-bar justify-content-end">
                        <div class="mx-3">
                            <i class="fab fa-facebook-f mx-2"></i>
                            
                        </div>

                        <div class="mx-3">
                            <i class="fas fa-phone mx-2"><span class="phone">
                                 @if(empty($contact))
                                 There is no Data
                                 @else
                                 {{ $contact->phone }}
                                 @endif
                            </span></i>
                        </div>

                        <div class="mx-3">
                            <i class="far fa-envelope-open mx-2"><span class="phone">
                                 @if(empty($contact))
                                 There is no Data
                                 @else
                                 {{ $contact->mail }}
                                 @endif
                            </span></i>
                        </div>
                         <div class="mx-3">
                            <i class="far fa-envelope-open mx-2"><span class="phone">
                            @if( \Illuminate\Support\Facades\Auth::user())
                            <a href = "/customer/bookedroom" style = "color:#fff"> Dashboard</a>
                            @else
                            <a href = "/login" style = "color:#fff">Login</a>
                            @endif
                            </span></i>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light home-index">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/images/logo.png" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@milestone') }}">Our Milestone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@team') }}">Our People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@csr') }}">CSR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@project') }}">Our Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@business') }}">Our Business Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('FrontController@contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
