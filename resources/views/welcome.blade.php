<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Merriweather' rel='stylesheet' type='text/css'>-->

	<link rel="stylesheet" href="{{ asset('/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}"> <!-- Resource style -->
	<script src="{{ asset('/js/modernizr.js') }}"></script> <!-- Modernizr -->
  	
	<title> Home | Jigyaasa Education Trust</title>
</head>
<body>

    <header class="cd-header">
		<div id="cd-logo"><a href="#0">Jigyaasa Educational Trust</a></div>

		<nav class="cd-main-nav">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="about">About</a></li>
				<li><a href="gallery">Gallery</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</nav> <!-- cd-main-nav -->
	</header>
	
	@yield('content')

    <script src="{{ asset('/js/jquery.js') }}"></script> <!-- Resource jQuery -->
    <script src="{{ asset('/js/main.js') }}"></script> <!-- Resource main -->
</body>
</html>