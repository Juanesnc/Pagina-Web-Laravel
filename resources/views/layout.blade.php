<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<style>
    body {
        background-color: rgb(236, 230, 230);
    }

    a,
    .nav-link {
        text-decoration: none;
        color: #AAD9BB;
    }

    .btn {
        text-decoration: none;
    }

    .btn-primary {
        background-color: rgb(170, 209, 244);
        border-color: rgb(170, 209, 244);
    }

    .title-home {
        border-color: rgb(170, 209, 244);
        color: rgb(170, 209, 244);
    }

    .btn-outline-primary {
        border-color: rgb(170, 209, 244);
        color: rgb(170, 209, 244);
    }
</style>

<body>
    <div id='app' class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')

            @include('partials.session-status')
        </header>

        <main class="py-3">
            @yield('content')
        </main>

        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
