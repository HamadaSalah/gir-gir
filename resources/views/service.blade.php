<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $service->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/royalwedding.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Aboutproviders.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"  />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" ></script>

    <!-- fontAwesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body class="bookShop-container">
    <!-- navbar -->

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
                    <img src="{{ asset('imgs') }}/call-calling.svg" alt="contact us" />
                    <a href="tel:+12345678"><span style="color:#000">Contact Us</span></a>
                </a>
                @guest
                    <a href="{{ route('users.login') }}"
                        class="fm-cairo btn btn-primary py-1 px-3 mx-3"><span><img
                                src="{{ asset('imgs') }}/loginico.svg" alt="login icon" /></span>
                        Login</a>
                    <a href="signupuser.html" class="fm-cairo btn text-bg-light py-1 px-3">
                        <span><img src="{{ asset('imgs') }}/signupico.svg"
                                alt="sign up icon" /></span>
                        Sign Up</a>
                @endguest
                @auth
                    <div class="dropdown" style="display: inline-block; margin:0 10px">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" style="border-radius: 25px"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ Route('orders') }}">Order
                                    Histroy</a></li>
                            <li><a class="dropdown-item" href="{{ Route('logout') }}">Logout</a></li>
                        </ul>
                    </div>

                    <div class="dropdown"  style="display: inline-block;">
                        <a class="btn btn-secondary dropdown-toggle" style="background:0;border:0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          
            
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg fill="#000000" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                          viewBox="0 0 611.999 611.999" xml:space="preserve">
                        <g>
                          <g>
                            <g>
                              <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203
                                C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578
                                c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626
                                h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856
                                c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626
                                C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32
                                c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082
                                c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z
                                M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826
                                c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485
                                c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z"/>
                              <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258
                                c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258
                                C323.259,126.96,315.532,119.235,306.001,119.235z"/>
                            </g>
                          </g>
                        </g>
                        </svg>
                          
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          @foreach (notifications() as $item)
                          <li><a class="dropdown-item" href="#">{{ $item->text }}</a></li>
                          <li><hr class="dropdown-divider"></li>
            
                          @endforeach
                        </ul>
                      </div>
                @endauth

                @auth

                    {{-- <button class="btn btn-outline-primary border-0 py-1 px-2">
              <img src="{{ asset('imgs') }}/Bell_pin_light.svg" alt="bell pin light">
                    </button> --}}
                    {{-- <button class="btn btn-outline-primary border-0 py-1 px-2">
              <img src="{{ asset('imgs') }}/fav_icon.svg" alt="add to icon">
                    </button>
                    <button class="btn btn-outline-primary border-0 py-1 px-2"> --}}
                        {{-- <img src="{{ asset('imgs') }}/messagesnavico.svg"
                        alt="messages icon">
                    </button> --}}
                    <button class="btn btn-outline-primary border-0 py-1 px-2 mb-1">
                        <a href="{{ Route('myCart') }}"><img
                                src="{{ asset('imgs') }}/cartnavico.svg" alt="cart icon"></a>
                    </button>
                    <button class="btn btn-outline-primary border-0 py-1 px-2 mb-1 settings__btn">
                        <img src="{{ asset('imgs') }}/settingnavico.svg" alt="settings icon">
                    </button>
                @endauth
            </div>
        </div>
    </div>
    <div class="row align-items-center position-relative">
        {{-- Auth User Coins --}}
        {{-- End auth user coins --}}
        <div class="col-6 d-none d-lg-block">
            <ul class="list-group d-flex flex-row ms-5">
                {{-- (LOOPING) Start categories --}}
                @foreach(categories() as $category)
                    <li class="list-group-item p-0 border-0">
                        <a href="{{ Route('category', $category->id) }}"
                            class="btn px-2 py-3 text-black-50">{{ $category->name }}</a>
                    </li>
                @endforeach
                {{-- End categories --}}
            </ul>

        </div>
        <div class="col-lg-5 col-sm-12">
            <form class="form   my-3 me-5" action="{{ Route('search') }}" method="GET"
                style="display: inline-block;width: 75%">
                <div class="input-group border ms-2 rounded rounded-5">
                    @csrf
                    <input type="text" name="name" class="form-control border-end-0 rounded-start-5 p-2  "
                        placeholder="What is the event?">
                    <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"
                        tabindex="-1" />

                    <button class="btn filter p-2" type="submit">
                        <img src="{{ asset('imgs/uil_filter.svg') }}" alt="filter icon">
                    </button>
                    <button class="btn search p-2" type="submit">
                        <img src="{{ asset('imgs/searchico.svg') }}" alt="search icon">
                    </button>
                </div>
            </form>


            <div class="coinuser" style="display: inline-block;width: 100px;float: right;line-height: 80px">
                <span><img src="{{ asset('imgs/openmoji_coin.png') }}" alt="">
                    {{ auth()->user()?->coins }} Coin</span>

            </div>

        </div>
    </div>

    <div class="backgroundService">
        
            
            <img class="backgroundImg col-sm-6 col-md-6" style="border-radius: 50%;
        width: 100px;
        height: 100px;" src="{{ asset($service->provider->avatar) }}"
                alt="" />
        <div class="hypernav">
            <a href="">home</a>
            <a href="">Individual providers</a>
            <a href="">Providers : {{ $service->provider->name }}</a>
        </div>
        <div class="companyname">
            <h1>{{ $service->provider->name }}</h1>
            @for ($i = 1; $i <= ceil($service->average_rate); $i++)
            <i style="color: gold" class="fa-solid fa-star"></i>
            @endfor
            @for ($i = 5; $i > ceil($service->average_rate); $i--)
            <i style="color: gray" class="fa-solid fa-star"></i>
            @endfor
          
            <span style="
            font-family: Chau Philomene One;
            font-size: 25px;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: -0.5px;
            text-align: center;
            color: white;
            margin-top: 5px;
          ">{{ $service->average_rate }}</span>
        </div>
    </div>

    <!-- nav service -->
    {{-- <nav class="navitems">
        <div class="navservice">
            <a class="nav-link m-2" href="{{ route('provider.show' , $service->provider) }}">
                <img class="vector-item" src="{{ asset('imgs/material-symbols_home.png') }}"
                    alt="" />Full Page</a>
            <a class="nav-link m-2" href="#">Reviews</a>
            <a class="nav-link m-2 active" href="#">Services</a>
            <a class="nav-link m-2" href="{{ route('provider.location' , $service->provider) }}">Location</a>
            <a class="nav-link m-2" href="{{ route('provider.about' , $service->provider) }}">About</a>
            <a class="nav-link m-2" href="{{ route('provider.packages' , $service->provider) }}">Packages</a>
        </div>
    </nav> --}}
    <div style="background: #f0f0f0;">
        <div style="background: #f0f0f0;">
            <div class="container hayperlinks col-8 m-auto d-flex">
            <a class=" {{ request()->routeIs('provider.show') ? 'active' : '' }}" href="{{ route('provider.show', ['provider' => $service->provider]) }}">
                <img class="vector-item" src="{{ asset('imgs/material-symbols_home.png') }}">
                FullPage</a>
            <a class=" {{ request()->routeIs('provider.reviews') ? 'active' : '' }}" href="{{ route('provider.reviews', ['provider' => $service->provider]) }}">Reviews</a>
            <a class=" {{ request()->routeIs('provider.services') ? 'active' : '' }}" href="{{ route('provider.services', ['provider' => $service->provider]) }}">Services</a>
            <a class=" {{ request()->routeIs('provider.location') ? 'active' : '' }}" href="{{ route('provider.location', ['provider' => $service->provider]) }}">Location</a>
            <a class=" {{ request()->routeIs('provider.about') ? 'active' : '' }}" href="{{ route('provider.about', ['provider' => $service->provider]) }}">About</a>
            <a class=" {{ request()->routeIs('provider.packages') ? 'active' : '' }}" href="{{ route('provider.packages', ['provider' => $service->provider]) }}">Packages</a>
            </div>
        </div>
    </div>

    <!-- ballons image -->
    <div class="ballons">
        <h1>
            {{ $service->name }}
            <span class="rating"><i class="fa-solid fa-star"></i> {{ $service->average_rate }}</span>
        </h1>
        <div class="images">
            @foreach($service->files as $img)
            <a href="{{ asset($img->path) }}" data-fancybox data-caption=" ">
                <img src="{{ asset($img->path) }}" id="PackageImg" class="img-thumbnail" alt="{{ $service->name }}" />
            </a>
               
            @endforeach
        </div>
    </div>

    <style>
        .ballons {
    text-align: center;
    margin: 20px;
}

.ballons h1 {
    font-size: 2rem;
    color: #333;
    display: inline-block;
    margin-bottom: 10px;
}

.ballons .rating {
    font-size: 1rem;
    color: #ffa500;
    margin-left: 10px;
}

.images {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 15px;
}
#PackageImg {
    width: unset;
    height: 240px;
}
.images img {
    width: 20px;
    height: 20px;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.images img:hover {
    transform: scale(1.05);
}

</style>

    <!-- service section -->
    <form action="{{ Route('addToCard') }}" method="POST">
        @csrf
        <input type="hidden" name="service" value="{{ $service->id }}">
        <div class="service">
            <div>
                <h4>
                    {{-- <i class="fa-regular fa-clock"></i> --}}
                    Description:
                    <span>{{ $service->description }}</span>
                </h4>
            </div>
        </div>

        <!-- delivery section -->

        <div class="delivery">
            <h1><i class="fa-regular fa-clock"></i> Delivery and ordering time</h1>
            <div class="booking">

                {{-- <button>Book Now</button> --}}
                <label for="" style="line-height: 50px">From</label><input required type="datetime-local"
                    id="birthdaytime" name="time_from" style="border: 1px solid #CCC;
                        padding: 10px 20px;
                        border-radius: 25px;">
                <label for="" style="line-height: 50px">To</label><input required type="datetime-local"
                    id="birthdaytime" name="time_to" style="border: 1px solid #CCC;
                        padding: 10px 20px;
                        border-radius: 25px;">

            </div>
        </div>

        <!-- gender section -->

        <div class="gender">
            <div>
                {{-- <i class="fa-solid fa-mars-and-venus"></i> --}}
                <h1>Representative's gender</h1>
            </div>
            <div class="kind">
                <div>
                    <input type="radio" name="gender" value="male"><i class="fa-solid fa-person"></i>
                    <h4>Male</h4>
                </div>
                <i class="fa-regular fa-circle-check"></i>
            </div>
            <div class="kind">
                <div>
                    <input type="radio" name="gender" value="male"><i class="fa-solid fa-person-dress"></i>
                    <h4>Female</h4>
                </div>
                <i class="fa-regular fa-circle-check check"></i>
            </div>
        </div>

        <!-- order -->

        <div class="order-summary">
            <div class="order-details">
                <div class="input">
                    <h4>Order Location</h4>
                    <input required class="info" type="text" name="location"
                        placeholder="Kareem Mohsen, Order location Order location" />
                </div>

                <div class="input">
                    <h4>Note For Provider</h4>
                    <input required class="info" type="text" name="notes"
                        placeholder="worker: >>>>>>>>>>>>>>>>>>>>>>>>" />
                </div>

                <div class="input">
                    <h4>Phone Number</h4>
                    <input required class="info" type="text" name="phone_numbers"
                        placeholder="32456767877, 32456767877" />
                </div>

                <div class="code">
                    <div class="input">
                        <h4>Promo Code</h4>
                        <input class="info" name="coupon_code" type="text" placeholder="32W4E76R877" />
                    </div>

                    <h4>OR</h4>

                    <div class="input">
                        <h4>Use Coin</h4>
                        <input class="info" type="text" placeholder="1000" />
                    </div>
                </div>
    </form>
    <div class="summary-details">
        {{-- <div class="box">
            <div>DJ shop</div>
            <div>Invoice for balloons</div>
            <div>Data:<span>30/7/2027</span></div>
            <div>Invoice number:<span>123456</span></div>
            <div>status:<span>paid</span></div>
            <!-- <div> -->
            <!-- Data:<span>30/7/2027</span> -->
            <!-- </div> -->
          </div> --}}
        @guest
            <a href="{{ route('users.login') }}"
                class="fm-cairo btn btn-primary py-1 px-3 mx-3"><span><img
                        src="{{ asset('imgs') }}/loginico.svg" alt="login icon" /></span>
                Login</a>
            <a href="{{ Route('register') }}" class="fm-cairo btn text-bg-light py-1 px-3">
                <span><img src="{{ asset('imgs') }}/signupico.svg" alt="sign up icon" /></span>
                Sign Up</a>
        @else
            <div class="btns mb-5" style="width: 100%">
                <input class="btn btn-primary" style="display: inline-block;
                width: 100%;float: left;" name="add_to_card" type="submit" value="Add to cart">
                {{-- <input class="btn btn-primary" style="display: inline-block;
                width: 40%;float: right;"   name="pay_now" type="submit" value="pay now">
                </div> --}}
        @endguest
    </div>
    </div>
    </div>
  </form>

  <div class="clearfix"></div>
</div></div>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>
                    Gir <img style="width: 30%" src="././imgs/Vectorgir.png" alt="" />
                    <br />
                    Events
                </h2>
            </div>
            <div class="footer-links">
                <div class="footer-section">
                  <h4>Legal Information</h4>
                  <ul>
                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('cookie') }}">Cookie Policy</a></li>
                  </ul>
                </div>
                <div class="footer-section">
                  <h4>Navigation Links</h4>
                  <ul>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('services') }}">Products</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                  </ul>
                </div>
                <div class="footer-section">
                  <h4>Wedding Ideas</h4>
                  <ul>
                    <li><a href="{{ route('summer.weddings') }}">Summer Weddings</a></li>
                    <li><a href="{{ route('real.weddings') }}">Real Weddings</a></li>
                  </ul>
                </div>
                <div class="footer-section">
                  <h4>Birthday Ideas</h4>
                  <ul>
                    <li><a href="{{ route('summer.birthdays') }}">Summer Birthdays</a></li>
                    <li><a href="{{ route('real.birthdays') }}">Real Birthdays</a></li>
                  </ul>
                </div>
              </div>
              
            <div class="footer-social">
                <a href="#">
                  <img src="{{ asset('') }}social/instagram.svg" alt="Facebook"/>
                </a>
                <a href="#">
                  <img src="{{ asset('') }}social/facebook.svg" alt="Facebook"/>
                </a>
                <a href="#">
                  <img src="{{ asset('') }}social/twitter.svg" alt="Facebook"/>
                </a>
                <a href="#">
                  <img src="{{ asset('') }}social/tiktok.svg" alt="Facebook"/>
                </a>
                <a href="#">
                  <img src="{{ asset('') }}social/yt.svg" alt="Facebook"/>
                </a>
              </div>
                  <div class="footer-apps">
                <h4>Get the app</h4>
                <a href="#"><img src="{{ asset('') }}imgs/app-store.24ce31e7a13056d542d1.png"
                        alt="App Store" /></a>
                <a href="#"><img src="{{ asset('') }}imgs/googleApp.8f241223f55c067c2fb6.png"
                        alt="Google Play" /></a>
            </div>
        </div>
        <div class="col-12">
            <div class="footer-bottom">
                <p>Company, 2024.</p>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- Modal -->
   
   
    <script src="{{ asset('js/BookShop.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
