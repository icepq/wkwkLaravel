<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WKKW</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    @include('components.footer')

    <div class="foot">
        @yield('foot')
    </div>
</body>
</html>
