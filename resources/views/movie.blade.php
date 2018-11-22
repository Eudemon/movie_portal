@extends('layouts.app')

@section('content')

    @if (!($movies))
        <img src="{{ url('/img/404.png') }}" class="img-fluid">
    @else
        <div class="card mb-3">
            <img class="card-img-top" src="{{ asset('/uploads/'. $movies[0]->img) }}" alt="{{ $movies[0]->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $movies[0]->title }}</h5>
                <div class="card-text">
                    <div class="row">
                        <div class="col">
                            <p><strong>Format: </strong>{{ $movies[0]->format }}</p>
                        </div>
                        <div class="col">
                            <p><strong>Length: </strong>{{ $movies[0]->length }} minutes</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Year: </strong>{{ $movies[0]->year }}</p>
                        </div>
                        <div class="col">
                            @for ($a = 0; $a < $movies[0]->rating; $a++)
                                <i class="fas fa-star" style="color: #ffe46c;"></i>
                            @endfor
                            @for ($a = 0; $a < (5 - $movies[0]->rating); $a++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                </div>
                <p class="card-text"><small class="text-muted"></small></p>
            </div>
        </div>
    @endif

@endsection