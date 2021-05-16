<!DOCTYPE html>
<html>
<head>
	<title>web-site</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
 {{ View::make('header')}}

     @yield('content')
  {{ View::make('footer')}}	
</body>
<style>
	.custom-login{
		height: 500px;
		padding-top: 100px
	}
	img.slider-img
	{
		height: 400px !important;
	}
	.custom-product
	{
		height: 700px;
	}
	.slider-text
	{
		background-color: #24465454 !important;
	}
</style>
</html>