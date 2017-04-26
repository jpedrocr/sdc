<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:type" content="website">
        <meta property="og:locale" content="pt_PT">
        <meta property="og:image" content="img/logo/sdclogofb.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:url" content="http://sangalhosdc.pt/">
        <meta property="og:title" content="Sangalhos DC">
        <meta property="og:description" content="">

        <link rel="apple-touch-icon" sizes="57x57" href="img/logo/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/logo/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/logo/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/logo/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/logo/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/logo/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/logo/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/logo/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/logo/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="img/logo/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/logo/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/logo/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/logo/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        @component('components.navbar')
        @endcomponent
        <div class="container">
            @component('components.banner')
            @endcomponent
@yield('content')
        </div>
        @component('components.rodape')
        @endcomponent
		<script src="{{ mix('js/manifest.js') }}" type="text/javascript"></script>
		<script src="{{ mix('js/vendor.js') }}" type="text/javascript"></script>
		<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
