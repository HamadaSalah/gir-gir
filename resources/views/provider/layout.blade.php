<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $provider->tag ?? $provider->name }} | @yield('title')</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="{{ asset('') }}css/Aboutproviders.css" />
  <link
  href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
"
  rel="stylesheet"
/>
    @stack('css')
    <style>

      .form.my-3.me-5 input[type="text"] {
        border-top: 0;
        border-bottom: 0
      }
    </style>

    
<style>
    .provider-info-container {
        max-width: 800px; /* Container width */
        margin: 20px auto; /* Centering */
        padding: 20px; /* Padding around the container */
        background-color: #EFEFEF; /* White background */
        border-radius: 15px; /* Rounded corners */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .provider-info-table {
        width: 100%; /* Full width */
        border-collapse: collapse; /* Collapse borders */
    }

    .provider-info-label {
        padding: 10px; /* Padding for labels */
        font-weight: 500; /* Semi-bold */
        color: #555; /* Medium gray */
    }

    .provider-info-value {
        padding: 10px; /* Padding for values */
        color: #777; /* Slightly lighter gray */
        border-bottom: 1px solid #e0e0e0; /* Border between rows */
    }

    .provider-info-value:last-child {
        border-bottom: none; /* No border for the last row */
    }
</style>

  </head>
  <body>
    <!-- navbar -->
    <div class="container-fluid border-bottom">
      <div class="row align-items-center">
        <nav class="navbar navbar-expand-lg col-md-12 col-lg-6">
            <a href="{{ Route('home') }}" class="navbar-brand ps-5">
              <img src="{{ asset('imgs') }}/logo.svg" alt="brand logo" />
            </a>
            <button
              class="navbar-toggler border-0 ms-auto"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse text-center text-lg-start"
              id="navbarNav"
            >
              <ul class="navbar-nav align-items-center">
                <li class="nav-item active px-4 text-nowrap">
                  <a class="nav-link home__main p-0" href="{{ Route('home') }}">Home</a>
                </li>
                <li class="nav-item px-4 text-nowrap">
                  <a class="nav-link p-0" href="{{ Route('search') }}">Packages</a>
                </li>
                <li class="nav-item px-4 text-nowrap">
                  <a class="nav-link p-0" href="{{ Route('bestShops') }}">Best shops</a>
                </li>
                <li class="nav-item px-4 text-nowrap">
                  <a class="nav-link p-0" href="{{ Route('providers') }}">Providers</a>
                </li>
              </ul>
            </div>
          </nav>
          
        <div class="col-md-12 col-lg-4 ms-lg-auto text-center text-lg-start menusm" style="text-align: right !important;">
            <a
              href="#contactus"
              class="text-decoration-none text-black text-opacity-75"
            >
              <img src="{{ asset('imgs') }}/call-calling.svg" alt="contact us" />
              <span>Contact Us</span>
            </a>
            @auth
            <div class="dropdown" style="display: inline-block; margin:0 10px">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" style="border-radius: 25px" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->name}}
              </a>
  
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{Route('orders')}}">Order Histroy</a></li>
                <li><a class="dropdown-item" href="{{Route('logout')}}">Logout</a></li>
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
  
            @guest
              <a href="{{ route('users.login') }}" class="fm-cairo btn btn-primary py-1 px-3 mx-3"
              ><span><img src="{{ asset('imgs') }}/loginico.svg" alt="login icon" /></span>
              Login</a
              >
              <a
              href="{{ Route('register') }}"
              class="fm-cairo btn text-bg-light py-1 px-3"
              >
              <span><img src="{{ asset('imgs') }}/signupico.svg" alt="sign up icon" /></span>
              Sign Up</a
              >
            @endguest
  
            @auth
              {{-- <button class="btn btn-outline-primary border-0 py-1 px-2">
                <img src="{{ asset('imgs') }}/Bell_pin_light.svg" alt="bell pin light">
              </button> --}}
              {{-- <button class="btn btn-outline-primary border-0 py-1 px-2">
                <img src="{{ asset('imgs') }}/fav_icon.svg" alt="add to icon">
              </button>
              <button class="btn btn-outline-primary border-0 py-1 px-2"> --}}
                {{-- <img src="{{ asset('imgs') }}/messagesnavico.svg" alt="messages icon">
              </button> --}}
              <button class="btn btn-outline-primary border-0 py-1 px-2 mb-1" style="position: relative">
                <a href="{{Route('myCart')}}"><img src="{{ asset('imgs') }}/cartnavico.svg" alt="cart icon"><span class="cartCount">{{ cartCount() }}</span></a>
              </button>
              {{-- <button class="btn btn-outline-primary border-0 py-1 px-2 mb-1 settings__btn">
                <img src="{{ asset('imgs') }}/settingnavico.svg" alt="settings icon">
              </button> --}}
            @endauth
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 d-none d-lg-block">
            <ul class="list-group d-flex flex-row ms-5">
                @foreach(categories() as $category)
                <li class="list-group-item p-0 border-0">
                  <a href="{{ Route('category', $category->id) }}" class="btn px-2 py-3 text-black-50">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
          </div>
          <div class="col-lg-5 col-sm-12">
            <form class="form   my-3 me-5"  action="{{ Route('search') }}" method="GET">
              <div class="input-group border ms-2 rounded rounded-5">
                   @csrf
                  <input type="text" name="name" class="form-control border-end-0 rounded-start-5 p-2  " placeholder="What is the event?">
                  <input type="submit"
                  style="position: absolute; left: -9999px; width: 1px; height: 1px;"
                  tabindex="-1" />
    
                 <button class="btn filter p-2" type="submit">
                  <img src="{{ asset('imgs/uil_filter.svg') }}" alt="filter icon">
                </button>
                <button class="btn search p-2" type="submit">
                  <img src="{{ asset('imgs/searchico.svg') }}" alt="search icon">
                </button>
              </div>
            </form>
          </div>
    </div>
   <!-- background -->

   <div class="backgroundService">
    <img
      class="backgroundImg col-sm-6 col-md-6 rounded-circle"
      src="{{ asset($provider->avatar) }}"
      alt=""
    />
    <div class="companyname">
<h1 class="mt-3">
    {{ $provider->tag ?? $provider->name }}
</h1>
<span>
  @for ($i = 1; $i <= ceil($provider->average_rate); $i++)
  <i style="color: gold" class="fa-solid fa-star"></i>
  @endfor
  @for ($i = 5; $i > ceil($provider->average_rate); $i--)
  <i style="color: gray" class="fa-solid fa-star"></i>
  @endfor

{{-- <img src="{{ asset('') }}imgs/Star 9.png" alt="">
<img src="{{ asset('') }}imgs/star 9.png" alt="">
<img src="{{ asset('') }}imgs/star 9.png" alt="">
<img src="{{ asset('') }}imgs/star 9.png" alt="">
<img src="{{ asset('') }}imgs/star 9.png" alt=""> --}}
</span>
<span style="font-family: Chau Philomene One;
font-size: 25px;
font-weight: 400;
line-height: 20px;
letter-spacing: -0.5px;
text-align: center;
color: white;
margin-top: 15px;">{{ $provider->average_rate }}</span>
    </div>
  </div>

  <div style="background: #f0f0f0;
    padding-bottom: 4px;">
    <div class="container hayperlinks col-8 m-auto d-flex">
      <a class="col m-2 {{ request()->routeIs('provider.show') ? 'active' : '' }}" href="{{ route('provider.show', ['provider' => $provider]) }}">
          <img class="vector-item" src="{{ asset('imgs/material-symbols_home.png') }}">
          FullPage</a>
      <a class="col m-2 {{ request()->routeIs('provider.reviews') ? 'active' : '' }}" href="{{ route('provider.reviews', ['provider' => $provider]) }}">Reviews</a>
      <a class="col m-2 {{ request()->routeIs('provider.services') ? 'active' : '' }}" href="{{ route('provider.services', ['provider' => $provider]) }}">Services</a>
      <a class="col m-2 {{ request()->routeIs('provider.location') ? 'active' : '' }}" href="{{ route('provider.location', ['provider' => $provider]) }}">Location</a>
      <a class="col m-2 {{ request()->routeIs('provider.about') ? 'active' : '' }}" href="{{ route('provider.about', ['provider' => $provider]) }}">About</a>
      <a class="col m-2 {{ request()->routeIs('provider.packages') ? 'active' : '' }}" href="{{ route('provider.packages', ['provider' => $provider]) }}">Packages</a>
  </div>

  </div>
    <!-- about-contant -->
    <div class="container col-8 m-auto about-contant d-flex">
        <h2>{{ $provider->tag ?? $provider->name }}' @yield('title') </h2>
  
        <div class="col-7 m-auto icons">
          <a href="{{ $provider->info->telegram ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/logo-telegram-4096 1.png') }}" alt="Telegram">
          </a>
          <a href="{{ $provider->info->whatsapp ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/whats.png') }}" alt="WhatsApp">
          </a>
          <a href="{{ $provider->info->facebook ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/facebook.png') }}" alt="Facebook">
          </a>
          <a href="{{ $provider->info->youtube ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/youtube-.png') }}" alt="YouTube">
          </a>
          <a href="{{ $provider->info->twitter ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/X.png') }}" alt="Twitter">
          </a>
          <a href="{{ $provider->info->instagram ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/instagram-png.png') }}" alt="Instagram">
          </a>
          <a href="{{ $provider->info->linkedin ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/Group.png') }}" alt="LinkedIn">
          </a>
          <a href="{{ $provider->info->wechat ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/wechat-logo--png 1.png') }}" alt="WeChat">
          </a>
          <a href="{{ $provider->info->tiktok ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
              <img src="{{ asset('imgs/Frame 1321315269.png') }}" alt="TikTok">
          </a>
      </div>
      
             
       </div>
      <!-- about -->


@yield('content')
    
    <!-- footer -->
    <footer>
        <div class="footer-container">
          <div class="footer-logo">
            <h2>
              Gir
               <img src="{{ asset('') }}imgs/Vectorgir.png" alt="" />
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
                <li><a href="#">Cookie Policy</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h4>Navigation Links</h4>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h4>For Provider</h4>
              <ul>
                <li><a href="#">Join now</a></li>
                <li><a href="#">Sign in</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h4>Wedding Ideas</h4>
              <ul>
                <li><a href="#">Summer Weddings</a></li>
                <li><a href="#">Real Weddings</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h4>Birthday Ideas</h4>
              <ul>
                <li><a href="#">Summer Birthdays</a></li>
                <li><a href="#">Real Birthdays</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-social">
            <a href="#"
              ><img src="{{ asset('') }}imgs/Group 1000004623.png" alt="Facebook"
            /></a>
          </div>
          <div class="footer-apps">
            <h4>Get the app</h4>
            <a href="#"
              ><img
                src="{{ asset('') }}imgs/app-store.24ce31e7a13056d542d1.png"
                alt="App Store"
            /></a>
            <a href="#"
              ><img
                src="{{ asset('') }}imgs/googleApp.8f241223f55c067c2fb6.png"
                alt="Google Play"
            /></a>
          </div>
        </div>
        <div class="col-12">
          <div class="footer-bottom">
            <p>Company, 2024.</p>
          </div>
        </div>
      </footer>
        <!-- footer -->

  <script src="{{asset('')}}js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
      <script src="{{asset('')}}js/script.js"></script>
    </body>
  </html>
  