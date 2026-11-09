@extends('frontend.layout.layout')

@section('content')
    <div class="container my-5 py-5">
        <div class="row g-5 align-items-start">

            <!-- 🖼️ Property Image Section -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ asset('image/' . $property->image) }}" class="img-fluid rounded-3 shadow w-100"
                        alt="{{ $property->title }}">
                </div>
            </div>

            <!-- 🏠 Property Details Section -->
            <div class="col-lg-6">
                <div class="border-bottom pb-3 mb-4">
                    <h1 class="display-6 fw-semibold" style="color: var(--text-color);">
                        {{ $property->title }}</h1>
                    <p class="fs-4 mb-1" style="color: var(--text-color);">
                        {{ $property->text1 }}
                        <small class="fs-6" style="color: var(--muted-text);">/month</small>
                    </p>
                </div>

                <p class="mb-4 fs-6 lh-lg" style="color: var(--muted-text);">{{ $property->text2 }}</p>

                <ul class="list-inline mb-4">
                    <li class="list-inline-item me-4">
                        <i class="fas fa-bed me-2 text-primary"></i> <strong>3</strong> Bedrooms
                    </li>
                    <li class="list-inline-item me-4">
                        <i class="fas fa-bath me-2 text-primary"></i> <strong>3</strong> Bathrooms
                    </li>
                    <li class="list-inline-item me-4">
                        <i class="fas fa-ruler-combined me-2 text-primary"></i> <strong>1200</strong> sq ft
                    </li>
                </ul>

                <!-- 🧾 Action Buttons -->
                <!-- 🧾 Action Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <!-- Buy Button (Form Submit) -->
                    <form action="{{ route('property.inquiry') }}" method="POST" class="flex-grow-1">
                        @csrf
                        <input type="hidden" name="property_id" value="{{ $property->id }}">
                        <input type="hidden" name="property_title" value="{{ $property->title }}">
                        <input type="hidden" name="property_price" value="{{ $property->text1 }}">
                        <input type="hidden" name="property_price2" value="{{ $property->text2 }}">
                        <input type="hidden" name="property_image" value="{{ $property->image }}">

                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-shopping-cart me-2"></i> Buy
                        </button>
                    </form>

                    <!-- Sell Button (Does Nothing) -->
                    <button type="button" class="btn btn-secondary btn-lg flex-grow-1">
                        <i class="fas fa-dollar-sign me-2"></i> Sell
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
