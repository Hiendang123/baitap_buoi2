<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show Manager</title>
</head>

<body>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
    <div class="d-flex flex-row flex-wrap justify-content-start">
        @foreach ($dashboard as $dashboards)
            <div class="card m-2" style="width: 18rem;">
                <!-- Điều chỉnh ảnh để nằm ngang -->
                <img src="{{ asset($dashboards->image) }}" class="card-img-top img-fluid" alt=""
                    style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $dashboards->dashboard }}</h5>
                    <p class="card-text">{{ $dashboards->information }}</p>
                    <p class="card-text">{{ $dashboards->name_product }}</p>
                    <p class="card-text">{{ $dashboards->price_product }} <span
                            style="text-decoration: line-through;">{{ $dashboards->old_product }}</span>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
