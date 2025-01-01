
@extends('layouts.app')
@section('title' , 'Products')
@push('css')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css') }}" />
    <style>
        .card-img-top {
            height: 250px!important;
        }
        .hero .splide__list, .hero .splide__slide {
            height: 300px;
        }
        .custom-range {
            appearance: none;
            width: 100%;
            height: 8px;
            background: #e0e0e0;
            border-radius: 4px;
            outline: none;
        }
        .custom-range::-webkit-slider-thumb {
            appearance: none;
            width: 40px;
            height: 40px;
            background: #880e4f;
            border-radius: 50%;
            cursor: pointer;
            border: none;
            opacity: 0;
        }
        .custom-range::-moz-range-thumb {
            width: 40px;
            height: 40px;
            background: #880e4f;
            border-radius: 50%;
            cursor: pointer;
            border: none;
            opacity: 0;
        }
        .slider-label {
            position: absolute;
            color: white;
            font-size: 12px;
            background: #880e4f;
            border-radius: 50%;
            padding: 2px 6px;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(-50%, -130%);
            margin-top: 28px;
        }
        @media screen and (max-width: 991px) {
            .hero .splide__slide img {
                height: 300px !important;
                object-fit: cover;
            }
        }
    </style>
@endpush

@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <h5 class="pb-4 border-bottom mb-3 position-relative   serviceHeader">
                Products
            </h5>
            <section class="splide bestShops trinds__slider--threeee container" style="padding: 0" aria-label="Splide Basic HTML Example">
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
                                        {{ $service->provider?->name }}
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
    </div>
</section>
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>

const splideTrindsThreeee = new Splide(".trinds__slider--threeee", {
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

splideTrindsThreeee.mount();

    </script>

@endsection

@push('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    {{-- <script src="{{ asset('') }}js/script.js"></script> --}}
@endpush