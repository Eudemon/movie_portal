@if (Auth::check())
    logged in
@else
    <div class="alert alert-info">
        To submit / delete movie, please <a href="{{ url('login') }}">log-in</a> or <a href="{{ url('register') }}">register</a>
    </div>
@endif