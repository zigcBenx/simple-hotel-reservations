<div class="container card">
    <form class="card-body">
        <h4 class="text-center">Make reservation</h4>
        <div class="form-group row mb-3">
            <div class="col">
                <label for="date-picker-from">From:</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="far fa-calendar"></i></div>
                    <input type="text" class="form-control" id="date-picker-from" required>

                </div>
            </div>
            <div class="col">
                <label for="date-picker-to">To:</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="far fa-calendar"></i></div>
                    <input type="text" class="form-control" id="date-picker-to" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <select class="form-select" aria-label="Choose your room">
                @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{ $room->name }}</option>
                @endforeach
            </select>
        </div>

        <hr>

        <div class="form-group mb-3">
            <label for="name">Name and surname:</label>
            <input type="text" id="name" class="form-control" placeholder="John Smith" required>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="mail">E-mail:</label>
                    <input type="text" id="mail" class="form-control" placeholder="john@smith.com" required>
                </div>
                <div class="col">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" class="form-control" placeholder="(+386) 31 200 300" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Additional information</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Send <i class="fab fa-telegram-plane"></i></button>
    </form>
</div>
