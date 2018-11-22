@if (Auth::check())
    <form action="{{ url('/post') }}" method="post" class="card p-3" enctype="multipart/form-data">
        @csrf
        <h2>Add a new movie</h2>
        <p class="text-info">Please fill in all fields</p>
        <div class="row">
            <div class="col">
                <label for="title">Title:</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Movie Title" name="title" required>
                </div>
            </div>
            <div class="col">
                <label for="imageVal">Cover:</label>
                <input type="file" name="image" id="imageVal" required>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <label for="lengthVal" class="pr-2">Length: </label><input id="rangeNum" type="number" disabled />
                <input type="range" class="custom-range" min="0" max="500" step="1" id="lengthVal" name="length" oninput="rangeNum.value = length.value">
            </div>
            <div class="col">
                <label for="yearVal" class="pr-2">Year: </label><input id="yearNum" type="number" disabled />
                <input type="range" class="custom-range" min="1800" max="2100" step="1" id="yearVal" name="year" oninput="yearNum.value = year.value">
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="formatVal">Format:</label>
                    <select class="form-control" name="format" id="formatVal" required>
                        <option disabled selected value> -- select an option -- </option>
                        <option>VHS</option>
                        <option>DVD</option>
                        <option>Streaming</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label for="rating">Rating: </label>
                <div class="form-control">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">5</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@else
    <div class="alert alert-info">
        To submit / delete movie, please <a href="{{ url('login') }}">log-in</a> or <a href="{{ url('register') }}">register</a>
    </div>
@endif