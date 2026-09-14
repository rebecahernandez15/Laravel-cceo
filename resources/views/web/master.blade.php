<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soy el maestro</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">

    <div class="container mx-auto">
        <div class="card card-white mt-4 p-4">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
