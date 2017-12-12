<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Acme</title>
<link rel="stylesheet" href="/css/app.css">
</head>

<body>
@include('includes.navbar')
<div class = "container">

@if (Request::is('/'))
	@include('includes.showcase')
@endif
<div class = "row">
	<div class = "col-md-8 col-lg-8">
	@yield('content')
	</div>
	<div class = "rocol-md-4 col-lg-4">
		@include('includes.sidebar')
	</div>  
</div>
</div>
<footer id="footer" class="text-center">
	<p>Copyrigh 2017 &copy; Acme</p>
</footer>
</body>
</html> 