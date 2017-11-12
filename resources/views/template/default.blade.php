<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Connect Us</title>
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- W3 schools CDN -->
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap(slate)-min.css">
<link rel="stylesheet" href="../js/bootstrap.min.js">
<!-- Changing the UI alpha version -->
<link href="../css1/vendor/all.css" rel="stylesheet">
<link href="../css1/app/app.css" rel="stylesheet">
<script src="../js1/app/app.js"></script>
<script src="../js1/vendor/all.js"></script>




</head>
<body>
	@include ('template.partial.navigation')
	<br><br><br>
	<div class="container" style="margin-left:170px" >  
		
		@include('template.partial.alerts')
		
		@yield('content')

	</div>
</body>
</html>