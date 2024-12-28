@extends('layouts.app')
@section('title' , 'Products')

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
        <a class="nav-link m-2" href="#">Products</a>
        <a class="nav-link m-2" href="{{ route('provider.location' , $provider) }}">Location</a>
        <a class="nav-link m-2 active" href="{{ route('provider.about' , $provider) }}">About</a>
        <a class="nav-link m-2" href="{{ Route('provider.show', $provider->id) }}">Pacckages</a>
      </div>
    </nav>
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

{{--
    <div class="container containerInfo">
        <section class="customer-details-container">
          <div class="customer-details-content">
            <div class="customer-details-grid">
              <div class="customer-details-column customer-details-column-left">
                <h2 class="customer-details-title">Customer details</h2>
                <div class="customer-details-labels">
                    <label>Country</label>
                    <label>City</label>
                    <label>Address</label>
                    <label>Province</label>
                    <label>Zip Code</label>
                    <label>Latitude</label>
                    <label>Longitude</label>
                </div>
              </div>
              <div class="customer-details-column customer-details-column-right">
                <div class="customer-details-values">
                    <div class="customer-details-values">
                        <p>{{ $provider->info->country ?? '---' }}</p>
                        <p>{{ $provider->info->city ?? '---' }}</p>
                        <p>{{ $provider->info->address ?? '---' }}</p>
                        <p>{{ $provider->info->province ?? '---' }}</p>
                        <p>{{ $provider->info->zip_code ?? '---' }}</p>
                        <p>{{ $provider->info->lat ?? '---' }}</p>
                        <p>{{ $provider->info->lng ?? '---' }}</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div> --}}

    <!-- info -->
<div class="container containerInfo">
    <section class="customer-details-container">
        <div class="customer-details-content">
            <div class="customer-details-grid">
                <div class="customer-details-column customer-details-column-left">
                    <h2 class="customer-details-title">Customer Details</h2>
                    <div class="customer-details-labels">
                        <label>Country</label>
                        <label>City</label>
                        <label>Address</label>
                        <label>Province</label>
                        <label>Zip Code</label>
                        <label>Latitude</label>
                        <label>Longitude</label>
                    </div>
                </div>
                <div class="customer-details-column customer-details-column-right">
                    <div class="customer-details-values">
                        <p>{{ $provider->info->country ?? '---' }}</p>
                        <p>{{ $provider->info->city ?? '---' }}</p>
                        <p>{{ $provider->info->address ?? '---' }}</p>
                        <p>{{ $provider->info->province ?? '---' }}</p>
                        <p>{{ $provider->info->zip_code ?? '---' }}</p>
                        <p>{{ $provider->info->lat ?? '---' }}</p>
                        <p>{{ $provider->info->lng ?? '---' }}</p>
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
