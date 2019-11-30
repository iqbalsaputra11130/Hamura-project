<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Latihan | Hamura</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{asset('user/assets/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{asset('user/assets/style.css')}}">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

    @yield('content')
    
		<script src="{{asset('user/assets/js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{asset('user/assets/js/plugins.js')}}"></script>
		<script src="{{asset('user/assets/js/app.js')}}"></script>
		
	</body>

</html>