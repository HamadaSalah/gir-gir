@extends('provider.layout')
@section('title', 'Packages')

@push('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('css/NewBorn.css') }}" />
<!-- fontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endpush

@section('content')
<div class="divide">
    <div class="divide">
        <!-- DashBoard -->
        <aside>
            <ul>
                @foreach ($allCategories as $category)
                    <!-- Always show all categories if none is selected -->
                    <li>
                        <a href="{{ route('provider.packages', ['provider' => $provider, 'category' => $category->id]) }}" style="text-decoration: none; color:#4F4F4F">
                            {{ $category->name }}
                            <img style="width: 25px; height: 25px;" src="{{ asset($category->image_url) }}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
    
        <div>
            @if ($selectedCategoryId)
                <!-- Display selected category -->
                @foreach ($categories as $category)
                    @if ($selectedCategoryId == $category->id)
                        <div class="newBorn">
                            <h1>{{ $category->name }}</h1>
                            <div class="myCards flex flex-wrap justify-between">
                                <div class="row">
                                    @foreach ($category->packages as $package)
                                    <div class=" col-md-6 mb-3">
                                        <div style="margin:0!important" class="myCard bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                                            <div class="image">
                                                <img src="{{ $package->files[0]->path }}" class="w-full h-40 object-cover" alt="{{ $package->name }}" />
                                            </div>
                                            <div class="info p-1">
                                                <div class="header flex justify-between items-center mb-2">
                                                    <h1 class="text-lg font-bold text-gray-800">{{ $package->name }}</h1>
                                                    <span class="text-yellow-400 font-semibold"><i class="fa-solid fa-star"></i> 4.8</span>
                                                </div>
                                                <p class="text-gray-600">Details:</p>
                                                <span class="block text-gray-500 mb-2">{{ $package->description }}</span>
                                                <span class="block text-lg font-semibold text-gray-700">From / {{ $package->cost }}$</span>
                                                <a
                                                href="{{ Route('package', $package->id) }}"
                                                
                                                >                                                <button class="mt-4 w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition duration-200">Discover Now</button>
                                                </a
                                              >                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                @foreach ($categories as $category)
                    @if ($category->packages->isNotEmpty())
                        <div class="newBorn">
                            <h1>{{ $category->name }}</h1>
                            <div class="myCards flex flex-wrap justify-between">
                                <div class="row">
                                    @foreach ($category->packages as $package)
                                    <div class=" col-md-6 mb-3">
                                        <div style="margin:0!important" class="myCard bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                                            <div class="image">
                                                <img src="{{ $package->files[0]->path }}" class="w-full h-40 object-cover" alt="{{ $package->name }}" />
                                            </div>
                                            <div class="info p-1">
                                                <div class="header flex justify-between items-center mb-2">
                                                    <h1 class="text-lg font-bold text-gray-800">{{ $package->name }}</h1>
                                                    <span class="text-yellow-400 font-semibold"><i class="fa-solid fa-star"></i> 4.8</span>
                                                </div>
                                                <p class="text-gray-600">Details:</p>
                                                <span class="block text-gray-500 mb-2">{{ $package->description }}</span>
                                                <span class="block text-lg font-semibold text-gray-700">From / {{ $package->cost }}$</span>
                                                <a
                                href="{{ Route('package', $package->id) }}"
                                
                                >                                                <button class="mt-4 w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition duration-200">Discover Now</button>
                                </a
                              >
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @else
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
