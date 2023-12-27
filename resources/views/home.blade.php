<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="Mark Otto, Jacob Thornton, and Bootstrap contributors" name="author">
        <meta content="Hugo 0.108.0" name="generator">
        <title>{{ config('app.name') }}</title>

        <link href="https://getbootstrap.com/docs/5.3/examples/dashboard/" rel="canonical">

        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        @include('layouts.header')

        @include('layouts.sidebar')

        @yield('content')

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
            integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>

        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>

</html>
