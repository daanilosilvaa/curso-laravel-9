<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Curso Laravel - @yield('title') </title>
</head>
<body class="bg-gray-50">
    @include('layouts.navbar')
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

</body>
</html>
