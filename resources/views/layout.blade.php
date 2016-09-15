<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Verlanglijstjes</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = { "csrfToken": "{!! csrf_token() !!}" };
    </script>
</head>
<body id="container">

	<header>
		<h1>Verlanglijstjes</h1>
		<a class="awesome" href="{{ url('/') }}"><i class="fa fa-gift"></i></a>

        <ul class="head-nav">
            @if (Auth::guest())
                <li class="btn btn-login">
                    <span>Inloggen</span>
                    <a class="btn-main green" href="{{ url('/login') }}"><i class="fa fa-user"></i></a>
                </li>
            @else
                <li class="btn btn-login">
                    <a class="btn-main color-{{ strtolower($username) }}" href="/list/{{ $username }}">{{ $username }}</a>
                </li>
            @endif
        </ul>
	</header>

	<section class="content">
        @yield('content')
	</section>

	<footer>
	    @if (URL::current() != url('/'))
        <div class="btn-home"> <span>Home</span>
            <a class="btn btn-main green" href="{{ url('/') }}"><i class="fa fa-home"></i></a>
        </div>
        @endif

        @if (Auth::check())
        <!--Bas laat deze knop staan eerst wil ik testen wat we hier doen -->
        <div class="btn-add"><span>Cadeaux</span>
            <a class="btn btn-main pink"><i class="fa fa-plus"></i></a>
        </div>

        <logout-bar/>
        @endif
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
