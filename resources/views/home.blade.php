<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <h1 class="text-center">Add Customers</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center" style="min-height: 30vh;">
        <div class="col-md-6">
            <form action="{{ route('formstore') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name: </label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">phone</label>
                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Web</label>
                    <input type="text" class="form-control" name="web" value="{{ old('web') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="container mt-4">
        <h2>Customer List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Date</th>
                    <th>Phone</th>
                    <th>Web</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->age }}</td>
                        <td>{{ $customer->date }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->web }}</td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
