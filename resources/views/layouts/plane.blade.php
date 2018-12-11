<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>MVCH Administration Dashboard</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
	
</head>
<body>
<script src="{{ asset("assets/scripts/jquery.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/scripts/bootstrap.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/scripts/Chart.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/scripts/metisMenu.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/scripts/sb-admin-2.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/scripts/functions.js") }}" type="text/javascript"></script>
	@yield('body')
<!--<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>-->
</body>
</html>