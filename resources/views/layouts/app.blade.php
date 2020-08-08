<!DOCTYPE html>
<html>
<head>
	<title>Sistemas UNI @yield('title') </title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/22a95f274b.js" crossorigin="anonymous"></script>
</head>
<body>
	@yield('content')
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>