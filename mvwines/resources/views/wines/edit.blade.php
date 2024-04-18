@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Edit Wine
            </h1>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('wines.update', $wine->id) }}" method="post">
            @method('PUT')
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <!-- Wine Name -->
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ $wine->name }}" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Enter the name of the wine.</div>
            </div>
            <div class="mb-3">
                <!-- Wine Type -->
                <label for="type_id" class="form-label">Wine Type</label>
                <select class="form-select" id="type_id" name="type_id" required aria-describedby="typeHelp">
                    <option selected disabled>Select Wine Type</option>
                    @foreach ($winetypes as $winetype)
                        <option value="{{ $winetype->id }}" {{ $winetype->id == $wine->type_id ? 'selected' : '' }}>
                            {{ $winetype->name }}
                        </option>
                    @endforeach
                </select>
                <div id="typeHelp" class="form-text">Select the type of wine.</div>
            </div>
            <div class="mb-3">
                <!-- Vineyard -->
                <label for="vineyard_id" class="form-label">Vineyard</label>
                <select class="form-select" id="vineyard_id" name="vineyard_id" required aria-describedby="vineyardHelp">
                    <option selected disabled>Select Vineyard</option>
                    @foreach ($vineyards as $vineyard)
                        <option value="{{ $vineyard->id }}" {{ $vineyard->id == $wine->vineyard_id ? 'selected' : '' }}>
                            {{ $vineyard->name }}
                        </option>
                    @endforeach
                </select>
                <div id="vineyardHelp" class="form-text">Select the vineyard of the wine.</div>
            </div>
            <div class="mb-3">
                <!-- Rating -->
                <label for="rating" class="form-label">Rating</label>
                <input type="range" class="form-range" id="rating" name="rating" min="0" max="100"
                    value="{{ $wine->rating }}" step="1" aria-describedby="ratingHelp">
                <div id="ratingHelp" class="form-text">Set the rating of the wine on a scale of 0 to 100.</div>
            </div>
            <div class="mb-3">
                <!-- Price -->
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required
                    value="{{ $wine->price }}" aria-describedby="priceHelp">
                <div id="priceHelp" class="form-text">Enter the price of the wine.</div>
            </div>
            <div class="mb-3">
                <!-- Image -->
                <label for="image" class="form-label">Image URL</label>
                <input type="url" class="form-control" id="image" name="image" onchange="previewImage();" required
                    value="{{ $wine->image }}" aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">Enter the URL of the image of the wine.</div>
                <img id="imagePreview" src="{{ $wine->image }}" class="my-3" alt="Image Preview"
                    style="display: block; width: 100px; height: 100px;">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
