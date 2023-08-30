<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Justread | By David Carreño</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-screen h-screen bg-zinc-100">
        @include('layouts._partials.nav')
        @yield('content')
    </div>
</body>

</html>
