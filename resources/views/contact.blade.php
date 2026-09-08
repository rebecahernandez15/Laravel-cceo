<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact 1</h1>
    <p>{{$name}}</p>

    @if($name != "Rebeca")
        Tu nombre no es Rebeca
    @else
        <h2>Tu nombre es Rebeca</h2>
    @endif

    <ul>
    @foreach([1,2,3,4,5] as $item)
            <li>{{$item}}</li>
    @endforeach
    </ul>

</body>
</html>
