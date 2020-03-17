<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Rentacar'))</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/admin-panel.css') }}">
</head>
<body class="">
<div id="app" class="">
    @include('admin.layout.nav')

    <div class="wrapper d-flex">
        @include('admin.layout.sidebar')

        <div class="content">
            <main>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
