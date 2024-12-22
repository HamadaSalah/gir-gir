@extends('provider.layout')
@section('title' , 'Location')

@push('css')
<link rel="stylesheet" href="{{ asset('') }}css/bootstrap.css" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/services.css') }}" />
<link rel="stylesheet" href="{{ asset('css/location.css') }}" />
@endpush
@section('content')
<div class="container my-5">
  <div class="Pacckages" style="display: block;width: 100%;">
    <h3 style="display: inline;float: left;">LOCATION</h3>
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

    <div class="location-section mb-5">
        <h3 class="font-weight-bold">Location</h3>
            <div
              class="Group40660"
              style="
                width: 638px;
                height: 0.5px;
                position: relative;
              "
            >
              <div
                class="Line441"
                style="
                  width: 80.23px;
                  height: 0px;
                  left:80px;
                  top: -5px;
                  position: absolute;
                  transform: rotate(180deg);
                  transform-origin: 0 0;
                  border: 3px #931158 solid;
                "
              ></div>
            </div>
         <div class="container discription" style="margin-left: 150px;">
            @if(!empty($provider->info->location))
            @foreach(json_decode($provider->info->location) as $location)
            <p>
                <img src="{{ asset('imgs/location.png') }}" alt=""> {{ $location }}
            </p>
            @endforeach
            @else
            <p>
                <img src="{{ asset('imgs/location.png') }}" alt=""> The location is not available
            </p>
            @endif
         </div>
    </div>

    <!-- Call Section -->
    <div class="call-section">
        <h3 class="font-weight-bold">Call</h3>
        <div
        class="Group40660"
        style="
          width: 638px;
          height: 0.5px;
          position: relative;
        "
      >
        <div
          class="Line441"
          style="
            width: 80.23px;
            height: 0px;
            left:80px;
            top: -5px;
            position: absolute;
            transform: rotate(180deg);
            transform-origin: 0 0;
            border: 3px #931158 solid;
          "
        ></div>
      </div>
        <div class="container discription" style="margin-left: 150px;">        <p>
            <img src="{{ asset('imgs/call.png') }}" alt=""> You can reach us at the following numbers. We are at your service 12/24 hours a day
        </p>
        @if(!empty($provider->info->phones))
        @foreach(json_decode($provider->info->phones) as $phone)
            <p>{{ $phone }}</p>
        @endforeach
        @else
            <p>No phone numbers available.</p>
        @endif
    </div>

    </div>
</div>
@endsection
