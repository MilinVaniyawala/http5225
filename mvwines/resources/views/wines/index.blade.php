@extends('layouts.admin')
@section('content')
    <div class="row align-items-center py-5">
        <div class="col-md">
            <!-- Unsplash Image -->
            <img src="{{ asset('wineonblacktable.jpg') }}" alt="Wine Bottle On Black Table" class="d-block w-100 img-fluid">
        </div>
        <div class="col-md d-flex flex-column">
            <p class="text-muted mb-3">Welcome to MV Wines, where we craft high-quality, affordable wines for every
                moment that matters. We offer a diverse range of options to suit every taste preference.</p>
            <p class="text-muted mb-3">Our skilled winemakers spend a great deal of time in the vineyard, ensuring our
                grapes are at their peak for color, taste, and quality. We are committed to delivering superior quality
                wines at great value, while providing a positive experience to consumers.</p>
            <p class="text-muted mb-3">At MV Wines, we believe in preserving and enhancing the land for future
                generations to enjoy, adhering to sustainable practices that are environmentally sound, economically
                feasible, and socially equitable.</p>
        </div>
    </div>
    <h1 class="display-4 text-center mb-4">Our Products</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($wines as $wine)
            <div class="col">
                <div class="card wine-card">
                    <div class="wine-card-img-container">
                        <img src="{{ $wine->image }}" class="card-img-top img-fluid" alt="{{ $wine->name }}">
                    </div>
                    <div class="card-body wine-card-content">
                        <h5 class="card-title">{{ $wine->name }}</h5>
                        <h6 class="sub-title">{{ $wine->winetype->name }} Wine</h6>
                        <p class="card-text">{{ $wine->vineyard->name }} Vineyard</p>
                        <p class="card-text"><strong>${{ $wine->price }}</strong></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('wines.show', $wine->id) }}" class="btn btn-outline-info">View</a>
                        <a href="{{ route('wines.edit', $wine->id) }}" class="btn btn-outline-warning">Edit</a>
                        <a href="{{ route('wines.trash', $wine->id) }}" class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
