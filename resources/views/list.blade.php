@extends('layouts.app')

@section('content')

    @for ($a = 0; $a < count($movies); $a++)
        @if ($a % 2 === 0)
            <div class="row">
        @endif
                <div class="col p-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movies[count($movies) - $a - 1]->title }}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="row">
                                <div class="col">
                                     <a href="{{ url('/movie/' . $movies[count($movies) - $a - 1]->id) }}" class="btn btn-primary">See the movie</a>
                                </div>
                                <div class="col">
                                @if (Auth::check())
                                    <form action="{{ url('/delete') }}" method="post">
                                        @csrf
                                        <input hidden type="text" name="id" value="{{ $movies[count($movies) - $a - 1]->id }}">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @if ($a % 2 === 1)
            </div>
        @endif
        @php ($count = $a)
    @endfor

    @include('layouts.submit')

@endsection