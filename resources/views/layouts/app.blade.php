<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}

    <title>@yield('title') - Laravel 9</title>
</head>
<body class="bg-gray-50">

    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

</body>
</html>
