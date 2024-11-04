@extends('provider-panel.layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('provider-panel/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('provider-panel/css/service.css') }}" />
@endpush

@section('title', $package->name)

@section('content')
<main class="col-md-12 px-4">
    <div class="container mt-4">
        <h1 class="text-center mb-4">{{ $package->name }}</h1>

        <div class="card shadow-lg border-0 rounded">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ $package->cover }}" alt="{{ $package->name }}" class="img-fluid rounded-start cover-image" />
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <p class="mt-2"><strong>Description:</strong> {{ $package->description }}</p>
                        <p><strong>Price:</strong> <span class="text-success">${{ number_format($package->cost, 2) }}</span></p>
                        <span class="badge bg-info">Times Ordered: {{ $orderingCount }}</span>

                        <p class="mt-3"><strong>Services Offered:</strong></p>
                        <div class="row">
                            @foreach ($package->services as $service)
                                <div class="col-md-4 mb-3">
                                    <div class="card border-0 mt-2 shadow-sm hover-effect">
                                        <img src="{{ $service->cover }}" alt="{{ $service->name }}" class="img-fluid rounded" style="height: 150px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">{{ $service->name }}</h6>
                                            <p class="card-text text-success">${{ number_format($service->cost, 2) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <p><strong>Rating:</strong>
                            <span class="text-warning">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $package->rating)
                                        ★
                                    @else
                                        ☆
                                    @endif
                                @endfor
                            </span>
                            <span class="text-muted"> ({{ $package->rating }} out of 5)</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('provider-panel.packages.index') }}" class="btn btn-outline-primary">Back to Packages</a>
                            <div class="btn-group">
                                <a href="{{ route('provider-panel.packages.edit', $package->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="#"
                                   onclick="event.preventDefault();
                                   if (confirm('Are you sure you want to delete this package?')) {
                                       document.getElementById('delete-package-{{ $package->id }}').submit();
                                   }" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                                <form id="delete-package-{{ $package->id }}" action="{{ route('provider-panel.packages.destroy', $package->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .cover-image {
        height: 300px; /* Set a fixed height for the cover image */
        object-fit: cover; /* Maintain aspect ratio and fill the area */
        border-radius: 10px 0 0 10px; /* Rounded corners */
    }

    .hover-effect:hover {
        transform: scale(1.05);
        transition: transform 0.3s;
    }
</style>
@endsection
