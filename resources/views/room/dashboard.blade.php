<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 30vh;">
        <div class="col-md-6">
            <h3 class="text-center">Dashboard</h3>

            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label><b>Dashboard Products:</b></label>
                    <select class="form-select" name="product">
                        <option selected>Open this select menu</option>
                        <option value="Smartphone">Smartphone</option>
                        <option value="Tablet">Tablet</option>
                        <option value="LapTop">LapTop</option>
                        <option value="Accessory">Accessory</option>
                        <option value="Clock">Clock</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label><b>Information:</b></label>
                    <select class="form-select" name="information">
                        <option selected>Selected Products</option>
                        <option value="Outstanding product">Outstanding product</option>
                        <option value="New product launched ">New product launched </option>
                        <option value="Discounted products">Discounted products</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Name product:</b></label>
                    <input type="text" class="form-control" name="name_product">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Price product:</b></label>
                    <input type="text" class="form-control" name="price_product">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Old price product:</b></label>
                    <input type="text" class="form-control" name="old_product">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Add image product:</b><code> <b>* Obligatory</b></code></label>
                    <input type="file" class="form-control" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Show</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
