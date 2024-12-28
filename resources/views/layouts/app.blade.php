
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('css')
    <style>
      .form.my-3.me-5 input[type="text"] {
        border-top: 0;
        border-bottom: 0
      }
      .p-2.bg-dark.bg-opacity-75.rounded-2.position-absolute.end-0.me-3.mt-3 {
        display: none;
      }
    </style>
  </head>
  <body>
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

        <div class="col-md-12 col-lg-4 ms-lg-auto text-center text-lg-start menusm"  >
          <a
            href="#contactus"
            class="text-decoration-none text-black text-opacity-75"
          >
            <img src="{{ asset('imgs') }}/call-calling.svg" alt="contact us" />
            <a href="tel:+12345678"><span style="color:#000">Contact Us</span></a>
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
    <div class="row align-items-center position-relative">
        {{-- Auth User Coins --}}
        @auth('web')
        <div class="coinuser">
            <span><img src="{{ asset('imgs/openmoji_coin.png') }}" alt=""> {{ auth()->user()?->coins }} Coin</span>
          </div>
        @endauth
      {{--End auth user coins --}}
      <div class="col-6 d-none d-lg-block">
        <ul class="list-group d-flex flex-row ms-5">
            {{--(LOOPING) Start categories --}}
            @foreach(categories() as $category)
            <li class="list-group-item p-0 border-0">
              <a href="{{ Route('category', $category->id) }}" class="btn px-2 py-3 text-black-50">{{ $category->name }}</a>
            </li>
            @endforeach
            {{-- End categories --}}
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
              <div class="dropdown">
                <button class="btn   dropdown-toggle filter p-2" type="button" id="dropdownMenuButton1111" data-bs-toggle="dropdown" aria-expanded="false" style="margin: 0;padding: 2px!important;">
                  <img src="{{ asset('imgs/uil_filter.svg') }}" alt="filter icon">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1111" style="padding: 0 20px"> 
                  @foreach (allCategories() as $catt)
                    <li>
                        <div class="form-check dropdown-item">
                            <input class="form-check-input" name="cat_ids[]" type="checkbox" value="{{ $catt->id }}" id="checkbox{{ $loop->index+1 }}">
                            <label class="form-check-label" for="checkbox{{ $loop->index+1 }}">
                                {{  $catt->name }}
                            </label>
                        </div>
                    </li>                      
                  @endforeach
              </ul>
  
                {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1111">
                  @foreach (allCategories() as $catt)
                    <li><a class="dropdown-item" href="#">{{ $catt }}</a></li>
                  @endforeach
\                </ul> --}}
              </div>
             {{-- <button class="btn filter p-2" type="submit">
              <img src="{{ asset('imgs/uil_filter.svg') }}" alt="filter icon">
            </button> --}}
            <button class="btn search p-2" type="submit">
              <img src="{{ asset('imgs/searchico.svg') }}" alt="search icon">
            </button>
          </div>
        </form>
      </div>
    </div>
    @yield('content')
    <footer>
      <div class="footer-container">
        <div class="footer-logo">
          <h2>
            Gir <img style="width: 30%" src="{{ asset('imgs/Vectorgir.png') }}" alt="" />
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
              <li><a href="{{ route('services') }}">Services</a></li>
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
        
        {{-- Start of Social Media of website --}}
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
        {{-- End of Social Media of website --}}
        <div class="footer-apps">
          <h4>Get the app</h4>
          <a href="#"
            ><img
              src="{{ asset('imgs/app-store.24ce31e7a13056d542d1.png') }}"
              alt="App Store"
          /></a>
          <a href="#"
            ><img
              src="{{ asset('imgs/googleApp.8f241223f55c067c2fb6.png') }}"
              alt="Google Play"
          /></a>
        </div>
      </div>
      <div class="col-12">
        <div class="footer-bottom">
          <p>{{ env('APP_NAME') }}, 2024.</p>
        </div>
      </div>
    </footer>

    <div class="overlay bg-black bg-opacity-50 visually-hidden"></div>
    <div
      class="overlay__content z-3 w-50 position-fixed top-50 start-50 translate-middle visually-hidden"
    >
      <button class="btn text-dark z-3 close position-absolute top-25 end-0">
        <img src="{{ asset('imgs') }}/close.svg" alt="close button" />
      </button>
      <div class="splide progress flex-column bg-white">
        <div class="splide__arrows splide__arrows--ltr">
          <button
            class="splide__arrow splide__arrow--prev arr__prev"
            type="button"
            aria-label="Previous slide"
            aria-controls="splide01-track"
          >
            <img src="{{ asset('imgs') }}/arrleft.svg" alt="button previous" />
          </button>

          <button
            class="splide__arrow splide__arrow--next arr__next btn text-bg-primary rounded-2"
            type="button"
            aria-label="Next slide"
            aria-controls="splide01-track"
          >
            Next
          </button>
        </div>
        <div class="splide__track order-2">
          <ul class="splide__list">
            <li class="splide__slide">
              <div>
                <h3 class="text-dark">What type of event are you hosting?</h3>
                <div class="row justify-content-between mb-2">
                  <div
                    class="col-3 events d-flex flex-column align-items-center bg-gray"
                  >
                    <img src="{{ asset('imgs') }}/wpf_birthday.svg" alt="birthday icon" />
                    <span>Birthday</span>
                  </div>
                  <div
                    class="col-3 events d-flex flex-column align-items-center bg-gray"
                  >
                    <img src="{{ asset('imgs') }}/wpf_wedding-cake.svg" alt="birthday icon" />
                    <span> weddings </span>
                  </div>
                  <div
                    class="col-3 events d-flex flex-column align-items-center bg-gray"
                  >
                    <img src="{{ asset('imgs') }}/cil_child.svg" alt="birthday icon" />
                    <span>New born</span>
                  </div>
                </div>
                <div class="row justify-content-between">
                  <div
                    class="col-3 events d-flex flex-column align-items-center bg-gray"
                  >
                    <img
                      src="{{ asset('imgs') }}/game-icons_engagement-ring.svg"
                      alt="birthday icon"
                    />
                    <span>Engagement</span>
                  </div>
                  <div
                    class="col-3 events d-flex flex-column align-items-center bg-gray"
                  >
                    <img
                      src="{{ asset('imgs') }}/mdi_graduation-cap.svg"
                      alt="birthday icon"
                    />
                    <span>Graduation</span>
                  </div>
                  <div
                    class="col-3 events d-flex flex-column align-items-center bg-gray"
                  >
                    <img
                      src="{{ asset('imgs') }}/hugeicons_corporate.svg"
                      alt="birthday icon"
                    />
                    <span>Corporate Events</span>
                  </div>
                </div>
                <div class="spread_dots my-4 d-flex justify-content-center">
                  <div class="spread_dot bg-primary"></div>
                  <div class="spread_dot bg-gray"></div>
                  <div class="spread_dot bg-gray"></div>
                </div>
                <span class="text-uppercase d-block text-center my-3">or</span>
                <div class="describe my-3">
                  <p class="text-capitalize">describe your event</p>
                  <input
                    type="text"
                    placeholder="I have 20 guests for a birthday party. I want a birthday cake, and I need a clown for the kids."
                    class="form-control bg-gray describe__input"
                  />
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div>
                <h3 class="text-dark">Estimate the number of guests</h3>

                <div class="container-range--1 position-relative">
                  <div class="range-wrapper position-relative">
                    <div class="circle" id="circle">1</div>
                    <input
                      data-value="1"
                      type="range"
                      min="1"
                      max="500"
                      value="100"
                      class="form-range"
                      id="range"
                    />
                  </div>
                </div>
                <h3 class="text-dark">What is your budget?</h3>
                <div class="container-range--2 position-relative">
                  <div class="range-wrapper position-relative">
                    <div class="circle circle--2" id="circle">1</div>
                    <input
                      type="range"
                      min="100"
                      max="1000"
                      value="200"
                      class="form-range range--2"
                    />
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div>
                <h3 class="text-dark">Do you have a hall?</h3>
                <div class="d-flex gap-2 hall__container">
                  <button class="hall__input border form-control btn">
                    yes
                  </button>
                  <button class="hall__input border form-control btn">
                    no
                  </button>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="d-flex flex-column align-items-center">
                <h3 class="text-dark">What vendors are you looking to hire?</h3>
                <div class="row gap-2 px-2 mt-5 w-75 vendours">
                  <button
                    class="btn rounded-5 col border py-1 px-2 text-nowrap"
                  >
                    DJ music
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    a cook
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Chairs
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    photographer
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Decorations
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Flowers
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Invitation cards
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Balloons
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Cake
                  </button>
                  <button
                    class="btn py-1 px-2 rounded-5 col border text-nowrap"
                  >
                    Other
                  </button>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div>
                <h3 class="text-dark mb-5">
                  You are in guest mode and not logged in.
                </h3>
                <div class="d-flex flex-column align-items-center">
                  <a
                    href="#"
                    class="btn btn-primary text-white mb-3 d-block rounded-5 text-center w-75"
                    >log in</a
                  >
                  <a
                    href="signupuser.html"
                    class="btn btn-primary text-white mb-3 d-block rounded-5 text-center w-75"
                    >sign up</a
                  >
                </div>
                <div>
                  <p class="lead text-center text-black-50 fw-medium fs-14">
                    You can also log in using your account with:
                  </p>
                  <div class="social__link d-flex justify-content-center gap-3">
                    <a href="#" class="p-2 bg-gray"
                      ><img src="{{ asset('imgs') }}/xico.svg" alt="facebook"
                    /></a>
                    <a href="#" class="p-2 bg-gray"
                      ><img src="{{ asset('imgs') }}/appleico.svg" alt="google"
                    /></a>
                    <a href="#" class="p-2 bg-gray"
                      ><img src="{{ asset('imgs') }}/Google.svg" alt="facebook"
                    /></a>
                    <a href="#" class="p-2 bg-gray"
                      ><img src="{{ asset('imgs') }}/teamsico.svg" alt="google"
                    /></a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>

        <!-- Add the progress bar element -->
        <div class="my-slider-progress">
          <div class="my-slider-progress-bar"></div>
        </div>
      </div>
    </div>
    <div
      class="overlay__content visually-hidden arrangemet rounded-2 z-3 w-50 position-fixed top-50 start-50 translate-middle bg-white"
    >
      <button
        class="btn close__arrangement text-dark z-3 close position-absolute top-25 end-0"
      >
        <img src="{{ asset('imgs') }}/close.svg" alt="close button" />
      </button>
      <div class="p-3 d-flex flex-column">
        <h3>Arrangment</h3>
        <div class="d-flex justify-content-around">
          <ul
            class="d-flex text-black flex-column gap-2 list-unstyled fm-cairo fs-14 pe-6 border-end"
          >
            <li class="pb-2 border-bottom">
              <span class="right position-relative"
                ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
              /></span>
              Most requested
            </li>

            <li class="pb-2 border-bottom">
              <span class="right position-relative"
                ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
              /></span>
              Most rated to least rated
            </li>
            <li class="pb-2 border-bottom">
              <span class="right position-relative"
                ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
              /></span>
              Lowest rating Highest rating
            </li>
          </ul>
          <div>
            <div>
              <h4>Budget</h4>
              <ul
                class="d-flex text-black align-items-center gap-2 list-unstyled fm-cairo fs-14"
              >
                <li>
                  <span class="right position-relative"
                    ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
                  /></span>
                  The most
                </li>

                <li>
                  <span class="right position-relative"
                    ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
                  /></span>
                  The leat
                </li>
              </ul>
            </div>
            <div>
              <h4>Provider Type</h4>
              <ul class="d-flex text-black gap-2 list-unstyled fm-cairo fs-14">
                <li>
                  <span class="right position-relative"
                    ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
                  /></span>

                  company
                </li>

                <li>
                  <span class="right position-relative"
                    ><img src="{{ asset('imgs') }}/rightprimary.svg" alt="right check"
                  /></span>
                  Individual
                </li>
              </ul>
            </div>
          </div>
        </div>
        <button class="btn btn-primary align-self-end">Go</button>
      </div>
    </div>
@auth
<div class="settings bg-main overflow-scroll">
    <div class="d-flex flex-column align-items-center p-4">
      {{-- <button
        class="btn btn-outline-primary border-0 py-1 px-2 mb-1 align-self-end"
      >
        <img
          src="imgs/settingnavico.svg"
          alt="settings icon"
          class="settings__item"
        />
      </button> --}}
      <div>
        <img src="imgs/userimg1.png" alt="user photo" />
      </div>
      <p class="user__name">{{ auth()->user()->name }}</p>
      <p class="user__register_date text-black-50">Registered on {{ auth()->user()->created_at->format('d M') }}</p>
      @if(auth()->user()->type == 'admin')
      <a href="{{route('filament.manage.pages.dashboard')}}" target="_blank"
          class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
        >
          <div class="d-flex align-items-center">
            <img
              src="imgs/userfill.svg"
              alt="icon"
              class="p-2 bg-gray rounded-5 me-2"
            />
            <span>Manage Website</span>
          </div>
          <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </a>
      @endif
      <a href="amr"
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/userfill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>Edit Settings information</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
    </a>
      <button
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/heartfill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>Favorites</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </button>
      <button
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/historyfill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>My Booking history</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </button>
      <button
        class="d-flex support__btn justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center support__content">
          <img
            src="imgs/phonefill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>Support</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </button>
      <button
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/ifill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>About us</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </button>
      <button
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/lockfill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>Privacy policies</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </button>
      <button
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/termsfill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>Order history</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
      </button>
      <a href="{{ route('logout') }}"
        class="d-flex justify-content-between align-items-center btn p-2 bg-white shadow rounded-5 mt-3 w-100"
      >
        <div class="d-flex align-items-center">
          <img
            src="imgs/signoutfill.svg"
            alt="icon"
            class="p-2 bg-gray rounded-5 me-2"
          />
          <span>Sign out</span>
        </div>
        <span class="me-3 h3 fw-bolder mb-0">&rarr;</span>
    </a>
    </div>
  </div>
@endauth
    @stack('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>
