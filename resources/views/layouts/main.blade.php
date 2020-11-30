<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ $pageTitle }} - Car Rental Inc.</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">Car Rental Inc.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @include('partials.nav')
</nav>

<main role="main">

    @yield('jumbotron')
    @yield('content')

</main>

<footer class="container">
    <p>&copy; Car Rental Inc. 2020</p>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
