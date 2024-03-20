@extends('layouts.admin')

@section('content')
    <div class="container">
        @foreach ($courses as $course)
            <div class="row">
                <div class="col">
                    <h2>
                        {{ $course -> name}}
                    </h2>
                </div>
                <div class="col">
                    <h6>
                        {{ $course -> courseID}}
                    </h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection