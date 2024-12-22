@extends('provider.layout')
@section('title' , 'About')

@push('css')
<link rel="stylesheet" href="{{ asset('') }}css/bootstrap.css" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/services.css') }}" />
@endpush
@section('content')


<div class="container">
  <div class="Pacckages" style="display: block;width: 100%;">
    <h3 style="display: inline;float: left;">REVIEWS</h3>
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
<div class="provider-info-container">


        @foreach ($provider->rates as $rate)
          <div class="reviewtext" style="margin: 5px;
    position: relative;
    border: 1px dashed #931158 !important;
    border-radius: 15px;
    margin-bottom: 20px;padding: 20px">
            <span> <img src="{{ asset('') }}imgs/Mask group.svg" alt=""></span><span style="font-family: Cairo;
            font-size: 16px;
            font-weight: 600;
            line-height: 16px;
            letter-spacing: -0.02em;
            text-align: center;
            "> {{ $rate->user?->name }}
              <span>

                @for ($i = 1; $i <= (int)$rate->rate; $i++)
                <i style="color: gold" class="fa-solid fa-star"></i>
                @endfor
                @for ($i = 5; $i > (int)$rate->rate; $i--)
                <i style="color: gray" class="fa-solid fa-star"></i>
                @endfor

              </span>
              <br/>
            </span>
           <span style="padding-left: 50px"> <i class="fa-regular fa-comments" style="padding-right: 10px;color: #931158"></i> {{$rate->comment ?? '---'}}</span>

            </div>
        @endforeach
      </div>
    </div>
    </div>


@endsection
