@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Wine Details
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ $wine->image }}" class="card-img-top" alt="Wine Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $wine->name }}</h5>
                    <p class="card-text">Type: {{ $wine->winetype->name }}</p>
                    <p class="card-text">Vineyard: {{ $wine->vineyard->name }}</p>
                    <p class="card-text">Rating: {{ $wine->rating }}</p>
                    <p class="card-text">Price: {{ $wine->price }}</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('wines.edit', $wine->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('wines.trash', $wine->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
