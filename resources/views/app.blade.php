<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	
	<link href="{{ asset('/media/components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12" id="site-header">
			Header
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12" id="site-body">
			<div class="row">
				<div class="col-xs-3" id="site-navigation">
					Navigation
				</div>
				<div class="col-xs-3" id="site-content">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12" id="site-footer">
			Footer
		</div>
	</div>
</div>
	
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
