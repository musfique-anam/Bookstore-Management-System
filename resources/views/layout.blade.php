<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Bookstore</title>
</head>
<body>

    <!-- Constant Nav Bar -->
     
    <div class="top-bar">
        <h3>Bookstore</h3>
    </div>

    <!-- Dynamic page contents -->

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>