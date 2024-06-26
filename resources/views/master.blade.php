<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @include('partials.style')
</head>
<body>

    @include('partials.header')

    <main class="container mt-5">
        @yield('main')
    </main>

    @include('partials.footer')
    @include('partials.script')
</body>
</html>
