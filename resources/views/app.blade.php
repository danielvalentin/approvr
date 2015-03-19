<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="{{ asset('/media/css/style.css') }}" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="row" id="site-header">
	<div class="container">
		<div class="col-xs-12">
			<nav class="col-md-6" id="site-navigation">
				<ul>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-signal"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-cog"></span></a></li>
				</ul>
			</nav>
			<div class="col-md-6">
				<form action="#" class="navbar__search pull-right">
					<input type="text" class="form-control">
				</form>
			</div>
		</div>
	</div>
</div> <!-- end header !-->

	<!-- main content !-->
<div class="container">
	<div class="row">
		<div class="col-xs-12" id="site-body">
			<div class="row">
				<div class="col-xs-3" id="site-navigation">
					<ul class="nav nav-pills">
						<?php if(Auth::check()): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-7">
											Your projects (0/5)
										</div>
										<div class="col-xs-5 text-right">
											<a href="#" class="btn btn-xs btn-success">
												<span class="glyphicon glyphicon-plus"></span>
												New project
											</a>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<em>None yet..</em>
								</div>
							</div>
							<li>
								<a href="<?php echo Site::route('user.logout'); ?>"><?php echo trans('buttons.logout'); ?></a>
							</li>
						<?php else: ?>
							<li>
								<a href="<?php echo Site::route('user.login'); ?>"><?php echo trans('buttons.login'); ?></a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="col-xs-9" id="site-content">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	
</div> <!-- end container !-->
	
<div class="row">
	<div class="col-xs-12" id="site-footer">
		<div class="container">
				Footer
		</div>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
