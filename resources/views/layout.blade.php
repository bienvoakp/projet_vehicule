<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('_partials.link')

    <title> @yield('title') </title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        @include('_partials.header')
    </header>

    <main>
        @yield('content')
    </main>


    <footer class="bg-body-tertiary text-dark py-1 mt-auto">
        @include('_partials.footer')
    </footer>

    @include('_partials.script')
</body>

</html>
