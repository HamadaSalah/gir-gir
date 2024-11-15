@extends('provider.layout')
@section('title' , 'About')

@push('css')
<link rel="stylesheet" href="{{ asset('') }}css/bootstrap.css" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/services.css') }}" />
@endpush
@section('content')



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
