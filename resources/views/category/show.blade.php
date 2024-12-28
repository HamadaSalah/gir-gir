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
        <div class="routing d-flex align-items-center">
            <a href="{{ Route('home') }}" class="text-black home__main fs-10 me-2 fw-light">Home</a>
            <span class="text-black">-</span>
            <a href="#" class="text-black fs-10 ms-2 fw-light add__package">{{ $category->name }}</a>
        </div>
        {{-- <h3 class="mt-3 mb-5 me-2 h1">Search results</h3> --}}
        <div class="d-flex justify-content-between border-bottom pb-2 mb-4 search__content position-relative">
            <div class="d-flex align-items-center">
                <label for="#type" class="service__label">Service Provider :</label>
                <form style="display: inline-block;" id="myForm" style="margin-bottom: 0" onsubmit="reloadPageWithParams(event)">
                    <select id="myInput" name="type" class="form-select border-0 text-black-50 bg-main" style="padding: 0 30px; 0 10px;width: 250px" onchange="document.getElementById('myForm').submit();">
                        <option value="">Select Type </option>
                        <option value="individual" <?php if(request()->type == 'individual') echo "selected"; ?>>Individual service providers</option>
                        <option value="company"  <?php if(request()->type == 'company') echo "selected"; ?>>Company service providers</option>
                    </select>
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
        <div class="row">
            @foreach($packages as $package)
                <div class="col-lg-6">
                    <div style="background: #fff;padding: 10px;border-radius: 20px;box-shadow: 0 0 5px #CCC;" class="mb-4">
                        {{-- <img src="{{ asset('imgs') }}/mdi_heart-outline.svg" alt="add to fav" class="p-2 bg-dark bg-opacity-75 rounded-5 position-absolute add__tofav mt-3" /> --}}
                        <img src="{{ asset($package->files()->first()?->path) }}" alt="wedding" class="card-img-top card-img-top-cat img-fluid rounded-3 leftImgcard" />
                        <div class="card-body ">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class="card-title h6 fw-bold mb-0">{{ $package->name }}</h3>
                                <span class="d-flex align-items-center bg_rating p-1 rounded-5"><img
                                        src="{{ asset('imgs') }}/Star_1.svg" alt="rating" class="me-1" />
                                    <span class="rating__number text-white fs-12 fw-light">{{ $package->average_rate ?? 'N/A' }}</span>
                                </span>
                            </div>
                            <p class="card-text text-black fs-14 ls-5 fm-cairo mb-1">
                                Name shop :
                                <span class="text-secondary text-black-50"> 
                                    {{ strlen($package->provider?->name) > 15 ? substr($package->provider?->name, 0, 15) . '...' : $package->provider?->name }}
                                </span>
                            </p>
                            <p class="card-text text-black fs-14 ls-5 fm-cairo mb-1">
                                items :
                                <span class="text-secondary text-black-50">
                                    {{ strlen($package->description) > 70 ? substr($package->description, 0, 70) . '...' : $package->description }}
                                </span>
                            </p>
                            <p class="card-text text-black fs-14 ls-5 fm-cairo mb-1">
                                Provider Type :
                                <span class="text-secondary text-black-50"> {{ $package->provider->type }} </span>
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
             <a href="{{Route('all-packages')}}"><button class="btn btn-primary fw-light py-1 px-3 mb-5 text-center">
                Find out more &rarr;
            </button></a>
        </div>

        
        <h5 class="pb-4 border-bottom mb-3 position-relative   serviceHeader">
            Products
        </h5>

        <section class="splide bestShops trinds__slider--three container" style="padding: 0" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list gap-2">
                    {{-- (LOOPING) Best shops --}}
                    @foreach ($services as $service)
                    <li class="splide__slide">
                        <div class="card mb-5 text-start shadow-sm position-relative border-0 p-0 rounded-5">
                            {{-- <img src="{{asset('')}}imgs/mdi_heart-outline.svg" alt="add to fav"
                                class="p-2 bg-dark bg-opacity-75 rounded-5 position-absolute end-0 me-3 mt-3"> --}}
            
                            <img src="{{ asset($service->files()->first()?->path) }}" alt="wedding" class="card-img-top">
            
                            <div class="card-body px-2 py-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h3 class="card-title h6 fw-bold mb-0">{{ $service->name }}</h3>
                                    <span class="d-flex align-items-center bg_rating p-1 rounded-5"><img
                                            src="{{asset('')}}imgs/Star_1.svg" alt="rating" class="me-1">
                                        <span class="rating__number text-white fs-12 fw-light">4.9</span>
                                    </span>
                                </div>
                                <p class="card-text text-black-50 fs-12 d-flex align-items-center mb-2">
                                    <span class="text-black text-opacity-25 fs-14 d-flex align-items-center"><img
                                            src="{{asset('')}}imgs/houseico.svg" alt="icon" class="myiconn">
                                        Shop
                                        :
                                    </span>
                                    {{ $service->packages[0]?->provider?->name }}
                                </p>
                                <p class="card-text text-black fs-14 ls-5 fm-cairo mb-2">
                                    Provider Type :
                                    <span class="text-secondary text-black-50">
                                        {{ $service->provider->type }}
                                    </span>
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <form action="{{ Route('addToCard') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="service" value="{{ $service->id }}">
                                
                                    <button type="submit" href="{{ Route('service', $service->id) }}" class="btn btn-primary fm-cairo py-1 px-2 rounded-2" tabindex="-1">+
                                        Add To Cart</button>
                                    </form>

                                    <p class="fm-cairo mb-0">
                                        from/<span class="text-primary fw-medium">{{ $service->cost }}$</span>
                                    </p>
                                </div>
                            </div>
                        </div>                      </li>
                    @endforeach

                    {{-- end of Best shops --}}
                </ul>
            </div>
        </section>



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
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script>  const splideTrindsThree = new Splide(".trinds__slider--three", {
    type: "loop",
    pagination: false,
    perPage: 4, // Default for large screens
    perMove: 1, // Moves one slide at a time

    breakpoints: {
      // Bootstrap's medium screen size (768px and below)
      768: {
        perPage: 2, // Show 2 slides on medium screens
      },
      // Bootstrap's small screen size (576px and below)
      576: {
        perPage: 1, // Show 1 slide on smaller screens
      },
    },
  });

  splideTrindsThree.mount();
</script>
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

@endsection


@push('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="js/script.js"></script>
@endpush
