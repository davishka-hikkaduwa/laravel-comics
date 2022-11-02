@extends('layouts._main')

@section('title')
    DC Comics Homepage
@endsection

@section('main')
    <div class="bg-black">
        <h2>Current Series</h2>
        <div class="container">
            <div class="card-container">
                @foreach ($comics as $comic)
                    <div>
                        @include('partials._comic-card')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-blue"></div>
@endsection
