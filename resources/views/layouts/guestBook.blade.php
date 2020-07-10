<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css?v=1') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css?v=1') }}" />
	</head>
	<body>
		<header>
			<h1>@yield('header')</h1>
		</header>
		<main>
			@yield('content')
		</main>
	</body>
</html>