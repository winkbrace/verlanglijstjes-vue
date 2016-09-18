<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Verlanglijstjes</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = { "csrfToken": "{!! csrf_token() !!}" };
    </script>
</head>
<body id="container">

	<wishlist-header username="{{ $username }}" list-owner="{{ $name or '' }}"></wishlist-header>

	<section class="content">
        @yield('content')
	</section>

    <wishlist-footer
        username="{{ $username }}"
        :at-home-page="{{ Request::getPathInfo() == '/' ? 'true' : 'false' }}"
    />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
