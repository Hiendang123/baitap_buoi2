<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="text-center">
        <h1>Welcome to PNV22A</h1>
    </div>
    <p>Students: </p>
    @foreach ($arr as $student)
        <p>Name: {{ $student['name'] }}</p>
        <p>Age: {{ $student['age'] }}</p>
        <p>Gender: {{ $student['class'] }}</p>
    @endforeach
</body>

</html>
