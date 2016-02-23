<!DOCTYPE html>
<html>
<head>
	<title>School</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

<style type="text/css">
	header{opacity: 0.7;}
	footer{background-color: #fff;opacity: 0.9;text-align: center;}
</style>
</head>
<body>
<header class="jumbotron">
	<div class="container">
		<h3> Online MCQ Quiz "OMQ" </h3>
	</div>
</header>
@yield('content')

<footer class = "container">
	&copy;All rights reserved
</footer>
</body>
</html>