<div class="container card">
    <form method="POST" action="{{route('store-test')}}" enctype="multipart/form-data" class="card-body">
        @csrf
        <h4 class="text-center">Make reservation</h4>
        <div class="form-group row mb-3">
            <div class="col">
                <label for="date-picker-from">From:</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="far fa-calendar"></i></div>
                    <input type="text" class="form-control @if($errors->has('date-picker-from')) is-invalid @endif" name="date-picker-from" id="date-picker-from" value="{{old('date-picker-from')}}">
                </div>
                @error('date-picker-from')<p class="text-danger">*{{$message}}</p>@enderror
            </div>
            <div class="col">
                <label for="date-picker-to">To:</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="far fa-calendar"></i></div>
                    <input type="text" class="form-control @if($errors->has('date-picker-to')) is-invalid @endif" name="date-picker-to" id="date-picker-to" value="{{old('date-picker-to')}}">
                </div>
                @error('date-picker-to')<p class="text-danger">*{{$message}}<p>@enderror
            </div>
        </div>

        <div class="form-group mb-3">
            <select class="form-select" aria-label="Choose your room" name="room" id="room">
                @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{ $room->name }}</option>
                @endforeach
            </select>
            @error('room')<p class="text-danger">*{{$message}}</p>@enderror
        </div>

        <hr>

        <div class="form-group mb-3">
            <label for="name">Name and surname:</label>
            <input type="text" name="name" id="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="John Smith" value="{{old('name')}}">
            @error('name')<p class="text-danger">*{{$message}}</p>@enderror
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="mail">E-mail:</label>
                    <input type="text" name="email" id="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="john@smith.com" value="{{old('email')}}">
                    @error('email')<p class="text-danger">*{{$message}}</p>@enderror
                </div>
                <div class="col">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control @if($errors->has('phone')) is-invalid @endif" placeholder="(+386) 31 200 300" value="{{old('phone')}}">
                    @error('phone')<p class="text-danger">*{{$message}}</p>@enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="info" id="info" style="height: 100px"></textarea>
                <label for="info">Additional information</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Send <i class="fab fa-telegram-plane"></i></button>
    </form>
</div>
