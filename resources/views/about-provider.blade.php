@extends('layouts.app')
@section('title' , 'Services')

@push('css')
    <link rel="stylesheet" href="{{ asset('') }}css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('') }}css/Aboutproviders.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
@endpush

@section('content')

   <!-- background -->

   <div class="backgroundService">
    <img
      class="backgroundImg col-sm-6 col-md-6"
      src="{{ asset('imgs/Ellipse 398.png') }}"
      alt=""
    />
    <div class="hypernav">
      <a href="">home</a>
      <a href="">Individual providers</a>
      <a href="">Providers : sick rose compay</a>
    </div>
    <div class="companyname">
<h1>
{{ $provider->name }}
</h1>
<span>
<img src="{{ asset('imgs/Star 9.png') }}" alt="">
<img src="{{ asset('imgs/star 9.png') }}" alt="">
<img src="{{ asset('imgs/star 9.png') }}" alt="">
<img src="{{ asset('imgs/star 9.png') }}" alt="">
<img src="{{ asset('imgs/star 9.png') }}" alt="">
</span>
<span style="font-family: Chau Philomene One;
font-size: 25px;
font-weight: 400;
line-height: 20px;
letter-spacing: -0.5px;
text-align: center;
; color: white;
margin-top: 5px; ">5.0</span>
    </div>
  </div>

    <!-- nav service -->
    <nav class="navitems" style="width: 100%;    height: 60px;line-height: 60px;background: #EAEAEA;">
      <div class="navservice">
        <a class="nav-link m-2" href="{{ Route('provider.show', $provider->id) }}">Full Page</a>
        <a class="nav-link m-2" href="#">Reviews</a>
        <a class="nav-link m-2" href="#">Services</a>
        <a class="nav-link m-2" href="#">Location</a>
        <a class="nav-link m-2 active" href="#">About</a>
        <a class="nav-link m-2" href="{{ Route('provider.show', $provider->id) }}">Pacckages</a>
      </div>
    </nav>

    <!-- pacckage section -->
    <div class="row col-12 Pacckages">
      <span style="margin-right: 30px;display: inline-block;float: left;width: auto;">About {{ $provider->name }}</span>

      <a href="{{$provider->info->facebook}}" target="_blank">
        <i class="fa-brands fa-facebook" style="color: #1877F2;"></i>
      </a>
      <a href="{{$provider->info->twitter}}" target="_blank">
        <i class="fa-brands fa-x-twitter" style="color: #1DA1F2;"></i>
      </a>
      <a href="{{$provider->info->email}}" target="_blank">
        <i class="fa-regular fa-envelope" style="color: #D44638;"></i>
      </a>
      <a href="{{$provider->info->telegram}}" target="_blank">
        <i class="fa-brands fa-telegram" style="color: #0088CC;"></i>
      </a>
      <a href="{{$provider->info->instagram}}" target="_blank">
        <i class="fa-brands fa-instagram" style="color: #E1306C;"></i>
      </a>
      <a href="{{$provider->info->whatsapp}}" target="_blank">
        <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i>
      </a>
      <a href="{{$provider->info->youtube}}" target="_blank">
        <i class="fa-brands fa-youtube" style="color: #FF0000;"></i>
      </a>
       @if ($provider->type != 'individual')<a href="{{$provider->info->youtube}}" target="_blank">
        <img src="{{asset('imgs/Group 1000004400 (1).png')}}" alt="" style="width: 30px;">
      </a>@endif
                        {{-- <img class="Pacckagesicons" src="{{ asset('imgs/Group 1000004403.png') }}" alt="" />
      <img class="PacckagesQR" src="{{ asset('imgs/Frame 1321315269.png') }}" alt="" /> --}}
    </div>
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
            width: 65.23px;
            height: 0px;
            left: -130px;
            top: 20px;
            position: absolute;
            transform: rotate(180deg);
            transform-origin: 0 0;
            border: 3px #931158 solid;
          "
        ></div>
      </div>
    </div>
    <!-- about -->

    <!-- paragraph -->
    <div class="row paragraph">
      <div class="description">
        <p>
        </p>
      </div>
    </div>
    <!-- paragraph -->

    <!-- info -->

    <div class="container containerInfo">
      <section class="customer-details-container">
        <div class="customer-details-content">
          <div class="customer-details-grid">
            <div class="customer-details-column customer-details-column-left">
              <h2 class="customer-details-title">Customer details</h2>
              <div class="customer-details-labels">
                <label class="customer-details-label">Email</label>
                <label class="customer-details-label">Phone number</label>
                
                @if ($provider->type != 'individual')
                    <label class="customer-details-label">Website</label>
                @endif
                <label class="customer-details-label">License Number</label>
                <label class="customer-details-label">Expiry Date</label>
                <label class="customer-details-label">Permissions</label>
                <label class="customer-details-label">Other</label>
                <label class="customer-details-label">Country</label>
                <label class="customer-details-label">City</label>
                <label class="customer-details-label">Address</label>
                <label class="customer-details-label">Province</label>
                <label class="customer-details-label">Zip</label>
              </div>
            </div>
            <div class="customer-details-column customer-details-column-right">
              <div class="customer-details-values">
                <p class="customer-details-value">{{$provider->info->email ?? '---'}}</p>
                <p class="customer-details-value">{{$provider->info->phone ?? '---'}}</p>
                @if ($provider->type != 'individual')<p class="customer-details-value">{{$provider->info->website ?? '---'}}</p>@endif
                <p class="customer-details-value">{{ $provider->info->license_number ?? '---' }}</p>
                <p class="customer-details-value">{{ $provider->info->license_expire_date ?? '---' }}</p>
                <p class="customer-details-value">34555</p>
                <p class="customer-details-value">34555</p>
                <p class="customer-details-value">{{ $provider->info->country ?? '---' }}</p>
                <p class="customer-details-value">{{ $provider->info->city ?? '---' }}</p>
                <p class="customer-details-value">{{ $provider->info->address ?? '---' }}</p>
                <p class="customer-details-value">dubai</p>
                <p class="customer-details-value">3594</p>
              </div>
            </div>
          </div>
        </div>
      </section>
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
            {{ $provider->info->mission ?? '---' }}
          </p>
          <h5 for="">Vision</h5>
          <p>
            {{ $provider->info->vision ?? '---' }}
          </p>
          <h5 for="">Value</h5>
          <p>
            {{ $provider->info->values ?? '---' }}
          </p>
        </div>
      </div>
    </div>
    {{-- <div class="container containerMission">
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
        <div class="reviewtext">
          <span> <img src="./imgs/Mask group.svg" alt=""></span><span style="font-family: Cairo;
          font-size: 16px;
          font-weight: 600;
          line-height: 16px;
          letter-spacing: -0.02em;
          text-align: center;
          "> Mohammed Al Rajhi 
            <span> <img style="width: 86px; height: 18px;" src="./imgs/review.png" alt=""></span>
            <p>dubai</p>
          </span>
          <span class="reviewparagraph">The drinks are a masterpiece. The hotel is more than wonderful. Sweet, <br>
             beautiful, delicious. All the services are delicious.</span>
          <span class="arrowformore">
            <!-- <img style="width: 14px;" src="./imgs/Arrow 10.png" alt=""> -->
             <a  href="">More </a></span>
        </div>
      </div>
    </div> --}}
    <!-- <div class="container containerMission">
      <div class="mission">
        <h2>Location </h2>
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
        <div class="location">
          <p> <img style="width: 10px; height: 13.03px;" src="" alt="">
            Location 1: Downtown Dubai, near Burj Khalifa, Dubai, United Arab
            Emirates.
          </p>
          <p> <img style="width: 10px; height: 13.03px;" src="" alt="">
            Location 1: Downtown Dubai, near Burj Khalifa, Dubai, United Arab
            Emirates.
          </p>
        </div>
      </div>
    </div>
    <div class="container ">
        <div class="mission containerMission">
            <h2>Call </h2>
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
            <div class="location">
              <p> <img style="width: 10px; height: 13.03px;" src="" alt="">
                You can reach us at the following numbers. We are at your service 12/24 hours a day
              </p>
    <div>
        <p>9719444444444</p>
        <p>9719444444444</p>
    </div>
            </div>
          </div>
    </div> -->
    </div>


@endsection
<style>
  .Pacckages a {
    display: inline-block;
    float: left;
    width: 60px;
    height: 20px;
    margin-top: 20px
  }
  .d-flex.flex-column.align-items-center.p-4 {
    display: none!important
  }
</style>
@push('js')
    <script src="{{asset('')}}js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="{{asset('')}}js/services.js"></script>
@endpush
