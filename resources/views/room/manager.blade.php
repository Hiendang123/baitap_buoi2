<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Room Manager</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 30vh;">
        <div class="col-md-6">
            <h4 class="text-center">Room Manager</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{ route('room.show-manager') }}" class="btn btn-primary">Show</a>
            <!-- Form Add Room -->
            <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="mb-3">
                    <label class="form-label">Name room: </label>
                    <input type="text" class="form-control" name="name_room">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description room</label>
                    <input type="text" class="form-control" name="description_room">
                </div>

                <div class="mb-3">
                    <label class="form-label">Price room</label>
                    <input type="text" class="form-control" name="price_room">
                </div>
                <button type="submit" class="btn btn-primary">Add Room</button>
            </form>

            {{-- <!-- Show List of Rooms -->
            <h4 class="text-center mt-4">Available Rooms</h4>
            @foreach ($manager as $managers)
                <div class="room mb-3">
                    <img src="{{ asset($managers->image) }}" alt="Room Image" style="width: 300px;">
                    <p><strong>Name:</strong> {{ $managers->name }}</p>
                    <p><strong>Description:</strong> {{ $managers->description }}</p>
                    <p><strong>Price:</strong> {{ $managers->price }}</p>
                </div>
            @endforeach --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
