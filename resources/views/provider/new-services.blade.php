@extends('provider.layout')
@section('title', 'Products')

@push('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('css/NewBorn.css') }}" />
<!-- fontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    .splide__slide {
        margin-right: 15px; /* Adjust the value as needed */
    }
</style>


@endpush

@section('content')
<main class="main__content sliders">
    <section class="most_requested mb-5 position-relative">
        
        <div class="container">
            <div class="Pacckages" style="display: block;width: 100%;">
                <h3 style="display: inline;float: left;">Products</h3>
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
            
        </div>
                    @if ($services->isEmpty())
                            <div class="text-center">
                                <h2>No Products available</h2>
                            </div>
                    @else
                    <section class="splide trinds__slider--one container" aria-label="Services Carousel">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                </svg>
                            </button>
                            <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                </svg>
                            </button>
                        </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($services as $service)
                            <li class="splide__slide">
                                <div class="card mb-5 text-start shadow-sm border-0 p-0 rounded-5">
                                    <img src="{{ asset('') }}imgs/mdi_heart-outline.svg" alt="add to fav" class="p-2 bg-dark bg-opacity-75 rounded-5 position-absolute end-0 me-3 mt-3">

                                    <img src="{{ $service->cover }}" alt="{{ $service->name }}" class="card-img-top">

                                    <div class="card-body px-2 py-4">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h3 class="card-title h6 fw-bold mb-0">{{ $service->name }}</h3>
                                            <span class="d-block"><img src="{{asset('')}}imgs/rating.svg" alt="rating"></span>
                                        </div>
                                        <p class="card-text text-black-50 fs-12">
                                            <strong>Shop:</strong> {{ $service->provider->tag ?? $service->provider->name }} <br>
                                            <strong>Provider Type:</strong> {{ $service->provider->type }} <br>
                                            You Get <img style="width: 16px;height: 16px; margin-bottom: 5px;" src="{{asset('')}}imgs/openmoji_coin.png" alt=""><span style="color: #931158;"> {{ $website_info->coins_rate * $service->cost }} Coin </span>
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="#" class="btn btn-primary fm-cairo py-1 px-2 rounded-2" tabindex="-1">Discover now</a>
                                            <p class="fm-cairo mb-0">
                                                <span class="text-primary fw-medium " style="font-family: Cairo;font-size: 19px;font-weight: 500;line-height: 20px;letter-spacing: -0.5px;">
                                                {{ $service->cost }}$
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        
                </ul>
            </div>
            <ul class="splide__pagination" role="tablist" aria-label="Select a slide to show"></ul>
                    @endif
        </section>
    </section>
</main>
@endsection
