
@extends('layouts.app')
@section('title' , 'About')
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
            <h1>About</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?</p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
        
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
        
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsa itaque, quo voluptas harum dolores debitis suscipit ipsum illum numquam labore at? Placeat adipisci accusantium laudantium praesentium enim corporis est?
        </div>
    </div>
</section>

@endsection
