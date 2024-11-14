@extends('provider.layout')
@section('title' , 'About')

@push('css')
<link rel="stylesheet" href="{{ asset('') }}css/bootstrap.css" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/services.css') }}" />
@endpush
@section('content')


    <!-- about-contant -->
     {{-- <div class="container col-8 m-auto about-contant d-flex">
      <h2>About {{ $provider->tag ?? $provider->name }}</h2>

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
     --}}

     {{-- </div> --}}
    <!-- about -->

    {{-- <div class="container col-8 description">
      <p>
        Our store organizes all types of parties with creative touches that
        give your event a unique flair. Enjoy parties tailored to your
        preferences and budget, with our meticulous attention to detail.
      </p>
    </div> --}}
    <!-- paragraph -->

    <!-- info -->
    <!-- info -->
<div class="provider-info-container">
    <table class="provider-info-table">
        <tbody>
            <tr>
                <td class="provider-info-label">Email</td>
                <td class="provider-info-value">
                    <a href="mailto:{{ $provider->email }}" style="text-decoration: none;color: #777 !important">{{ $provider->email }}</a>
                </td>
            </tr>
            <tr>
                <td class="provider-info-label">Phone Number</td>
                <td class="provider-info-value">
                    <a href="tel:{{ $provider->phone }}" style="text-decoration: none;color: #777 !important">{{ $provider->phone }}</a>
            </tr>
            @if($provider->type == 'company')
            <tr>
                <td class="provider-info-label">Website</td>
                <td class="provider-info-value">
                    <a href="{{ $provider->website ?? '#' }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;color: #777 !important">{{ $provider->website ?? 'N/A' }}</a>
            </tr>
            @endif
            <tr>
                <td class="provider-info-label">License Number</td>
                <td class="provider-info-value">{{ $provider->info->license_number ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Expiry Date</td>
                <td class="provider-info-value">{{ $provider->info->license_expire_date ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Permissions</td>
                <td class="provider-info-value">{{ $provider->info->permissions ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Other</td>
                <td class="provider-info-value">{{ $provider->info->other ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Country</td>
                <td class="provider-info-value">{{ $provider->info->country ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">City</td>
                <td class="provider-info-value">{{ $provider->info->city ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Address</td>
                <td class="provider-info-value">{{ $provider->info->address ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Province</td>
                <td class="provider-info-value">{{ $provider->info->province ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="provider-info-label">Zip</td>
                <td class="provider-info-value">{{ $provider->info->zip_code ?? 'N/A' }}</td>
            </tr>
        </tbody>
    </table>
</div>

    <!-- info -->

    <div class="container containerMission">
      <div class="mission">
        <h2>Mission , Vision & Values</h2>
        <div class="row col-12">
          <div
            class="Group40660"
            style="
              width: 638px;
              height: 0.5px;
              position: relative;
              transform: rotate(180deg);
              transform-origin: 0 0;
            "
          >
            <div
              class="Line441"
              style="
                width: 75.23px;
                height: 0px;
                left: 130px;
                top: 10px;
                position: absolute;
                transform: rotate(180deg);
                transform-origin: 0 0;
                border: 3px #931158 solid;
              "
            ></div>
          </div>
        </div>
        <div>
          <h5 for="">Mission</h5>
          <p>
            {{ $provider->info->mission ?? 'N/A' }}
          </p>
          <h5 for="">Vision</h5>
          <p>
            {{ $provider->info->vision ?? 'N/A' }}
          </p>
          <h5 for="">Value</h5>
          <p>
            {{ $provider->info->values ?? 'N/A' }}
          </p>
        </div>
      </div>
    </div>
    <div class="container containerMission">
      <div class="mission">
        <h2>Reviews</h2>
        <div class="row col-12">
          <div
            class="Group40660"
            style="
              width: 638px;
              height: 0.5px;
              position: relative;
              transform: rotate(180deg);
              transform-origin: 0 0;
            "
          >
            <div
              class="Line441"
              style="
                width: 75.23px;
                height: 0px;
                left: 130px;
                top: 10px;
                position: absolute;
                transform: rotate(180deg);
                transform-origin: 0 0;
                border: 3px #931158 solid;
              "
            ></div>
          </div>
        </div>
        <div class="reviewphoto">

        </div>
        @foreach ($provider->rates as $rate)
          <div class="reviewtext">
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
              <p style="margin-bottom: 0">dubai</p>
            </span>
           <span style="padding-left: 50px">{{$rate->comment}}</span>

            </div>
        @endforeach
      </div>
    </div>
    </div>


@endsection
