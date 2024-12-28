<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $provider->name }} Products</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/NewBorn.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="newBorn-container">
    <!-- Navbar -->
    <div class="container-fluid border-bottom">
        <div class="row align-items-center">
            <nav class="navbar navbar-expand-lg col-md-12 col-lg-6">
                <button class="navbar-toggler border-0 ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center text-lg-start" id="navbarNav">
                    <a href="{{ Route('home') }}" class="navbar-brand ps-5">
                        <img src="{{ asset('imgs') }}/logo.svg" alt="brand logo" /></a>
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active px-4 text-nowrap">
                                <a class="nav-link home__main p-0" href="{{ Route('home') }}">Home</a>
                            </li>
                            <li class="nav-item px-4 text-nowrap">
                                <a class="nav-link p-0" href="{{ Route('products') }}">Products</a>
                            </li>
                            <li class="nav-item px-4 text-nowrap">
                                <a class="nav-link p-0" href="{{ Route('providers') }}">Providers</a>
                            </li>
                            <li class="nav-item px-4 text-nowrap">
                                <a class="nav-link p-0" href="{{ Route('all-packages') }}">Packages</a>
                            </li>
                        </ul>
                            </div>
            </nav>
            <div class="col-md-12 col-lg-4 ms-lg-auto text-center text-lg-start">
                <a href="#contactus" class="text-decoration-none text-black text-opacity-75">
                    <img src="{{ asset('imgs/call-calling.svg') }}" alt="contact us" />
                    <a href="tel:+12345678"><span style="color:#000">Contact Us</span></a>
                </a>
                @guest
                    <a href="#" class="fm-cairo btn btn-primary py-1 px-3 mx-3"><span><img
                                src="{{ asset('imgs/loginico.svg') }}" alt="login icon" /></span>
                        Login</a>
                    <a href="signupuser.html" class="fm-cairo btn text-bg-light py-1 px-3">
                        <span><img src="{{ asset('imgs/signupico.svg }}" alt="sign up icon" /></span>
                        Sign Up</a>
                @endguest
                @auth
                    <button class="btn btn-outline-primary border-0 py-1 px-2">
                        <img src="{{ asset('imgs/Bell_pin_light.svg') }}" alt="bell pin light">
                    </button>
                    <button class="btn btn-outline-primary border-0 py-1 px-2 mb-1">
                       <a href="{{Route('myCart')}}"> <img src="{{ asset('imgs/cartnavico.svg') }}" alt="cart icon"></a>
                    </button>
                @endauth
            </div>
        </div>
    </div>

    <!-- User Coins -->
    <div class="row align-items-center position-relative">
        <div class="coinuser">
            <span><img src="{{ asset('imgs/openmoji_coin.png') }}" alt="">
                {{ auth()->user()?->coins }} Coin</span>
        </div>
        <div class="col-6 d-none d-lg-block">
            <ul class="list-group d-flex flex-row ms-5">
                @foreach(categories() as $category)
                    <li class="list-group-item p-0 border-0">
                        <a href="{{ Route('category', $category->id) }}"
                            class="btn px-2 py-3 text-black-50">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-5 col-sm-12">
            <form class="form form__nav my-3 me-5">
                <div class="input-group border ms-2 rounded rounded-5">
                    <input type="text" class="form-control border-end-0 rounded-start-5 p-2 form__nav--input"
                        placeholder="What is the event?">
                    <button class="btn filter p-2">
                        <img src="{{ asset('imgs/uil_filter.svg') }}" alt="filter icon">
                    </button>
                    <button class="btn search p-2">
                        <img src="{{ asset('imgs/searchico.svg') }}" alt="search icon">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Provider Background and Info -->
    <div class="backgroundService">
        <img class="backgroundImg col-sm-6 col-md-6" src="{{ asset('imgs/Ellipse 398.png') }}" alt="" />
        <div class="companyname">
            <h1>{{ $provider->name }}</h1>
            <span>
                <img src="{{ asset('imgs/Star 9.png') }}" alt="">
                <img src="{{ asset('imgs/star 9.png') }}" alt="">
                <img src="{{ asset('imgs/star 9.png') }}" alt="">
                <img src="{{ asset('imgs/star 9.png') }}" alt="">
                <img src="{{ asset('imgs/star 9.png') }}" alt="">
            </span>
            <span style="font-family: Chau Philomene One; font-size: 25px; font-weight: 400; line-height: 20px; letter-spacing: -0.5px; text-align: center; color: white; margin-top: 5px;">5.0</span>
        </div>
    </div>

    <!-- Navigation for Services -->
    <nav class="navitems">
        <div class="navservice">
            <a class="nav-link active m-2" href="#">
                <img class="vector-item" src="{{ asset('imgs/material-symbols_home.png') }}" alt="" />Full Page</a>
            <a class="nav-link m-2" href="#">Reviews</a>
            <a class="nav-link m-2" href="#">Services</a>
            <a class="nav-link m-2" href="#">Location</a>
            <a class="nav-link m-2" href="./aboutProviders.html">About</a>
            <a class="nav-link m-2" href="#">Packages</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="divide">
        <aside>
            <ul>
                <li>Birthday <i class="fa-solid fa-crown"></i></li>
                <li>New Born <i class="fa-solid fa-face-smile"></i></li>
                <li>Baby Gender <i class="fa-solid fa-mars-and-venus"></i></li>
                <li>Wedding <img style="width: 25px;height: 25px;" src="./imgs/wpf_wedding-cake.png" alt=""></li>
                <li>More <i class="fa-solid fa-arrow-down"></i></li>
            </ul>
        </aside>

        <div>
            @foreach ($services->groupBy('category_id') as $categoryId => $categoryServices)
                <div class="newBorn">
                    <h1>{{ $categories->find($categoryId)->name }}</h1>
                    <div class="myCards">
                        @foreach ($categoryServices as $service)
                            <div class="myCard">
                                <div class="image">
                                    <img src="{{ $service->files[0]->path }}" alt="Service Image" />
                                </div>
                                <div class="info">
                                    <div class="header">
                                        <h1>{{ $service->name }}</h1>
                                        <span><i class="fa-solid fa-star"></i> {{ $service->rating }}</span>
                                    </div>
                                    <p>Details: {{ $service->description }}</p>
                                    <span>From / {{ $service->cost }}$</span>
                                    <button>Discover now</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>
                    Gir <img style="width: 30%" src="./imgs/Vectorgir.png" alt="" />
                    <br />
                    Events
                </h2>
            </div>
            <div class="footer-links">
                <div class="footer-section">
                    <h4>Legal Information</h4>
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Phone</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
