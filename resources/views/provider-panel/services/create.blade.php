@extends('provider-panel.layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('provider-panel/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('provider-panel/css/service.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet"/>
@endpush

@section('title', "Create New Service")

@section('content')
    <!-- Sidebar and Main Content -->
    <main class="mt-5" id="pmain">
        <h3 class="text-center">Create New Service</h3>

        <div class="d-flex justify-content-center align-items-center" id="description">
            <!-- Form Section -->
            <div id="form">
                <form action="{{ route('provider-panel.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="d-flex" style="justify-content: space-evenly;" id="dflex">
                        <div id="pcard" class="position-relative">
                            <label for="fileInput" class="custom-file-input" style="cursor: pointer;">
                                <img id="selectedImage" src="{{ asset('imgs/plussign.png') }}" width="50px" alt="Add file">
                            </label>
                            <input type="file" id="fileInput" style="display: none;" name="file" accept="image/*" required>
                            @error('file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="ServiceName" class="form-note-label" style="color: #83044a;">Name of the Service</label>
                        <input type="text" class="form-control" id="ServiceName" name="name" value="{{ old('name') }}" required />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ServiceCost" class="form-note-label" style="color: #83044a;">Service Cost</label>
                        <input type="number" class="form-control" id="ServiceCost" name="cost" value="{{ old('cost') }}" required />
                        @error('cost')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="serviceDescription" class="form-note-label" style="color: #83044a;">Service Description</label>
                        <textarea class="form-control" id="serviceDescription" name="description" rows="4" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">Create Service</button>
                        <a href="{{ route('provider-panel.services.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        // Handle file input change for the service image
        document.getElementById('fileInput').addEventListener('change', function() {
            const fileInput = this;
            const selectedImage = document.getElementById('selectedImage');

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();

                // Create a URL for the selected file and set it as the source of the img element
                reader.onload = function(e) {
                    selectedImage.src = e.target.result; // Set the image src to the file's result
                    selectedImage.width = 200; // Set the width or any preferred size for the displayed image
                    selectedImage.alt = "Selected Image"; // Update alt text
                };

                reader.readAsDataURL(file); // Read the file as a data URL
            } else {
                selectedImage.src = "{{ asset('imgs/plussign.png') }}"; // Reset to plus sign if no file is selected
                selectedImage.width = 50; // Reset to original size
                selectedImage.alt = "Add file"; // Reset alt text
            }
        });

        // Handle label click to open file input
        document.querySelector('.custom-file-input').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action
            document.getElementById('fileInput').click(); // Trigger file input click
        });
    </script>
@endpush
