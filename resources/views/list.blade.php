@extends('layouts.app')

@section('content')

    @for ($a = count($movies) - 1; $a >= 0; $a--)
        @if ($a % 2 === 0)
            <div class="row">
        @endif
                <div class="col p-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movies[$a]->title }}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{ url('/movie/' . $movies[$a]->id) }}" class="btn btn-primary">See the movie</a>
                            @if (Auth::check())
                                <form action="{{ url('/delete') }}" method="post">
                                    @csrf
                                    <input hidden type="text" name="id" value="{{ $movies[$a]->id }}">
                                    <input type="submit" value="Delete">
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
        @if ($a % 2 === 1)
            </div>
        @endif
    @endfor

    {{--{{ count($movies) }}--}}

    @include('layouts.submit')

@endsection