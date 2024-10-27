@extends('layouts.app')
@section('title' , 'Home Page')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endpush

@section('content')


<section class="search__results bg-main  ">
    <div class="container mt-4">
        <div class="routing d-flex align-items-center" style="display: block !important;
    width: 100%;">
            <a href="#" class="text-black home__main fs-10 me-2 fw-light">Home</a>
            <span class="text-black">-</span>
            <a href="#" class="text-black fs-10 ms-2 fw-light add__package">Search Filter</a>
        </div>
        <h3 class="mt-3 mb-5 me-2 h1">Search results</h3>
        <div class="d-flex justify-content-between border-bottom pb-2 mb-4 search__content position-relative">
            <div class="d-flex align-items-center"  style="display: block !important;
    width: 100%;height: 60px;">
                <label for="#type" class="service__label">Service Provider :</label>
                <form style="display: inline-block;" id="myForm" style="margin-bottom: 0" onsubmit="reloadPageWithParams(event)">
                    <select id="myInput" name="type" class="form-select border-0 text-black-50 bg-main" onchange="document.getElementById('myForm').submit();">
                        <option value="">Select Type </option>
                        <option value="individual">Individual service providers</option>
                        <option value="company">Company service providers</option>
                    </select>
                </form>
                            
            
            
                <div class="filter-bar">
                    <a class="filter-dropdown"><i class="fa fa-filter" aria-hidden="true"></i><i class="fa fa-plus filter-hidden" aria-hidden="true"></i><span class="filter-dropdown-text">Filter</span> </a>
                    <a class="filter filter-hidden">
                      Price <span class="operator">=</span> North America, Asia </a><a class="filter-remove filter-hidden">&times;</a>
                    </a>
                    <form action="" method="GET">

                    <div class="edit-filter-modal hidden">
                        <select name="price-filter">
                            <option>Price</option>
                            <option>Lowset</option>
                            <option>Highest</option>
                        </select>
                        <select name="rate-filter">
                            <option>Rate</option>
                            <option>Lowset</option>
                            <option>Highest</option>
                        </select>
                        <button class="apply-button" type="submit" style="    border-radius: 25px;padding: 5px 30px;margin-top: 15px;">Apply</button><button class="text-button" style="    border-radius: 25px;padding: 5px 30px;margin-top: 15px;">Cancel</button>
                    </div>
                  </div>
                </form>
            </div>


                                
            {{-- <button class="btn filter__btn position-relative">
                <img src="{{ asset('imgs') }}/filterlogo.svg" alt="filter" class="img-fluid" />
                <ul class="p-2 bg-gray position-absolute start-0 rounded-2 filters visually-hidden z-3 list-unstyled">
                    <h5>Provider Type :</h5>
                    <li class="filters_item">
                        <a href="#" class="btn p-1 text-black-50">All providers</a>
                    </li>
                    <li class="filters_item">
                        <a href="#" class="btn p-1 text-black-50">Company providers</a>
                    </li>
                    <li class="filters_item">
                        <a href="#" class="btn p-1 text-black-50">Individual providers</a>
                    </li>
                </ul>
            </button> --}}

        </div>
        @if ($packages->count() > 0)
            
        <div class="row">
            @foreach($packages as $package)
                <div class="col-lg-6">
                    <div style="background: #fff;padding: 10px;border-radius: 20px;box-shadow: 0 0 5px #CCC;" class="mb-4">
                        <img src="{{ asset('imgs') }}/mdi_heart-outline.svg" alt="add to fav" class="p-2 bg-dark bg-opacity-75 rounded-5 position-absolute add__tofav mt-3" />
                        <img src="{{ asset('imgs') }}/most1.png" alt="wedding" class="card-img-top img-fluid rounded-3 leftImgcard" />
                        <div class="card-body ">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class="card-title h6 fw-bold mb-0">{{ $package->name }}</h3>
                                <span class="d-flex align-items-center bg_rating p-1 rounded-5"><img
                                        src="{{ asset('imgs') }}/Star_1.svg" alt="rating" class="me-1" />
                                    <span class="rating__number text-white fs-12 fw-light">4.9</span>
                                </span>
                            </div>
                            <p class="card-text text-black fs-14 ls-5 fm-cairo mb-1">
                                Name shop :
                                <span class="text-secondary text-black-50"> 
                                    {{ strlen($package->provider?->name) > 15 ? substr($package->provider?->name, 0, 15) . '...' : $package->provider?->name }}
                                </span>
                            </p>
                            <p class="card-text text-black fs-14 ls-5 fm-cairo mb-1">
                                Details :
                                <span class="text-secondary text-black-50">
                                    {{ strlen($package->description) > 70 ? substr($package->description, 0, 70) . '...' : $package->description }}
                                </span>
                            </p>
                            <p class="card-text text-black fs-14 ls-5 fm-cairo mb-1">
                                Provider Type :
                                <span class="text-secondary text-black-50"> Company </span>
                            </p>
                            <p class="fm-cairo mb-0">
                                from/<span class="text-primary fw-medium">{{ $package->cost }}$</span>
                            </p>
                            <div class="d-flex align-items-center justify-content-end gap-2">
                                <a href="{{ Route('package', $package->id) }}" class="btn btn-primary fm-cairo py-1 px-2 rounded-2">Discover now</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary fw-light py-1 px-3 mb-5 text-center">
                Find out more &rarr;
            </button>
        </div>
        <h5 class="pb-4 border-bottom mb-3 position-relative  ">
            services
        </h5>
        <section
            class="splide services__slider--one container splide--loop splide--ltr splide--draggable is-active is-initialized"
            aria-label="Splide Basic HTML Example" id="splide04" aria-roledescription="carousel">
            <div class="splide__arrows splide__arrows--ltr"><button class="splide__arrow splide__arrow--prev"
                    type="button" aria-label="Previous slide" aria-controls="splide04-track"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false">
                        <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z">
                        </path>
                    </svg></button><button class="splide__arrow splide__arrow--next" type="button"
                    aria-label="Next slide" aria-controls="splide04-track"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 40 40" width="40" height="40" focusable="false">
                        <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z">
                        </path>
                    </svg></button></div>
            <div class="splide__track splide__track--loop splide__track--ltr splide__track--draggable"
                id="splide04-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite"
                aria-atomic="true">
                <ul class="splide__list gap-2" id="splide04-list" role="presentation"
                    style="transform: translateX(-2615.91px);">
                    @foreach($services as $service)
                        <li class="splide__slide splide__slide--clone is-active" id="splide04-clone01" role="tabpanel"
                            aria-roledescription="slide" aria-label="1 of 1" style="width: calc(20%);"
                            aria-hidden="true">
                            <div class="card mb-5 text-start shadow-sm position-relative border-0 p-0 rounded-5">
                                <img src="http://girgir.test/imgs/mdi_heart-outline.svg" alt="add to fav"
                                    class="p-2 bg-dark bg-opacity-75 rounded-5 position-absolute end-0 me-3 mt-3">

                                <img src="http://girgir.test/imgs/most1.png" alt="wedding" class="card-img-top">

                                <div class="card-body px-2 py-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h3 class="card-title h6 fw-bold mb-0">{{ $service->name }}</h3>
                                        <span class="d-flex align-items-center bg_rating p-1 rounded-5"><img
                                                src="http://girgir.test/imgs/Star_1.svg" alt="rating" class="me-1">
                                            <span class="rating__number text-white fs-12 fw-light">4.9</span>
                                        </span>
                                    </div>
                                    <p class="card-text text-black-50 fs-12 d-flex align-items-center mb-2">
                                        <span class="text-black text-opacity-25 fs-14 d-flex align-items-center"><img
                                                src="http://girgir.test/imgs/houseico.svg" alt="icon" class="myiconn">
                                            Shop
                                            :
                                        </span>
                                        {{ $service->packages[0]?->provider?->name }}
                                    </p>
                                    <p class="card-text text-black fs-14 ls-5 fm-cairo mb-2">
                                        Provider Type :
                                        <span class="text-secondary text-black-50">
                                            Company
                                        </span>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="btn btn-primary fm-cairo py-1 px-2 rounded-2" tabindex="-1">+
                                            add
                                            your
                                            package</a>
                                        <p class="fm-cairo mb-0">
                                            from/<span class="text-primary fw-medium">{{ $service->cost }}$</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <ul class="splide__pagination splide__pagination--ltr" role="tablist" aria-label="Select a slide to show">
                <li role="presentation"><button class="splide__pagination__page is-active" type="button" role="tab"
                        aria-controls="splide04-slide01 splide04-clone11 splide04-clone12 splide04-clone13 splide04-clone14"
                        aria-label="Go to page 1" aria-selected="true"></button></li>
            </ul>
        </section>
        @else
                <div class="text-center">
                    <img src="{{asset('Group 1000004395.png')}}" alt="">
                </div>
        @endif

    </div>
</section>
<section class="search__empty bg-main d-none">
    <div class="container">
        <div class="routing d-flex align-items-center"></div>
        <a href="#" class="text-black fs-10 me-2 fw-light home__main">Home</a>
        <span class="text-black">-</span>
        <a href="#" class="text-black fs-10 ms-2 fw-light add__package">Search Filter</a>
        <h3 class="mt-3 mb-5 me-2 h1">Search results</h3>
        <p class="fm-cairo">
            search :
            <span class="search__message text-decoration-underline text-black-50">birthday32</span>
        </p>
        <div class="d-flex flex-column align-items-center">
            <img src="{{ asset('imgs') }}/cart.png" alt="cart image" />
            <p class="mr-neg-3 mt-4">No data</p>
        </div>
    </div>
</section>


@endsection
<script>
    function reloadPageWithParams(event) {
        event.preventDefault();  // Prevents traditional form submission
    
        const selectedValue = document.getElementById('myInput').value;
        const urlParams = new URLSearchParams(window.location.search);  // Get existing URL parameters
        urlParams.set('type', selectedValue);  // Set or update the 'type' parameter
    
        const newUrl = `${window.location.pathname}?${urlParams.toString()}`;  // Rebuild the URL with all parameters intact
    
        window.location.href = newUrl;  // Redirect to the updated URL
    }
    </script>
                
<style>.filter-bar{
    height: 50px;
    border-bottom: 1px solid #454545;
    padding: 16px;
    width: 250px;
    float: right;
    display: inline-block;
  }
  
  i{
    margin-left: 8px;
    margin-right: 8px;
  }
  
  .filter-dropdown{
    color: #000;
    transition: color 0.2s ease;
    cursor: pointer;
    margin-right: 16px;
  }
  
  .filter-dropdown:hover{
    color: rgba(0, 0, 0, 1);
  }
  
  .filter{
    padding: 8px 8px 8px 16px;
    background-color: #3A3A3A;
    border-radius: 50px 0 0 50px;
    color: rgba(255,255,255,0.8);
    margin: 8px 0;
    transition: all 0.2s ease;
  }
  
  .filter-remove{
    padding: 8px 16px 8px 8px;
    background-color: #3A3A3A;
    border-radius: 0 50px 50px 0;
    color: rgba(255,255,255,0.8);
    transition: all 0.2s ease;
  }
  
  .filter:hover, .filter-remove:hover{
    color: white;
    background-color: #585858;
  }
  
  .operator{
    color: rgba(255,255,255,0.5);
  }
  
  .filter-remove{
    color: rgba(255,255,255,0.5);
    cursor: pointer;
  }
  
  .remove:hover{
    color: white;
    
  }
  
  .edit-filter-modal{
    background-color: #F2F3F5;
    width: 260px;
    position: relative;
    left: -0;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.3);
    transition: transform 0.1s ease, opacity 0.1s ease;
    transform-origin: 0 0;
    padding: 16px;
    top: 7px;
    height: 150px;
  }
  
  select{
    width: 100%;
    height: 32px;
    background-color: white;
    border: 1px solid rgba(0,0,0,0.125);
    margin-bottom: 16px;
  }
  
   
  button{
    background-color: #80B636;
    color: white;
    padding: 8px 16px;
    border:none;
    border-radius: 3px;
    float: right;
  }
  
  button:hover{
    opacity: 0.8;
  }
  
  .text-button{
    background-color: transparent;
    color: #24272A;
  }
  
  .hidden{
    transform:scale(0.5);
    opacity: 0;
  
  }
  
  .filter-hidden{
    display:none;
  }
  
  
  </style>
@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
  $(".filter-dropdown, .text-button").click(function(){
    $(".edit-filter-modal").toggleClass("hidden");
    
  });
    $(".apply-button").click(function(){
    $(".edit-filter-modal").toggleClass("hidden");
          $(".filter, .filter-remove, .fa-plus, .fa-filter").toggleClass("filter-hidden");
      $(".filter-dropdown-text").text("Add filter");
    
      
    });
      
      $(".filter-remove").click(function(){
        $(".filter, .filter-remove, .fa-plus, .fa-filter").toggleClass("filter-hidden");
        $(".filter-dropdown-text").text("Filter dataset");
      });
  
  
  
  
});
    </script>
@endpush
