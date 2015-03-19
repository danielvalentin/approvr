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
<!-- end header !-->

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
										<div class="col-xs-6">
<?php
											$user = Auth::user();
											$projects = $user->projects()->get();
?>
											Your projects (<?php echo $projects->count(); ?>/5)
										</div>
										<div class="col-xs-6 text-right">
											<a href="<?php echo Site::route('projects.new'); ?>" class="btn btn-xs btn-success">
												<span class="glyphicon glyphicon-plus"></span>
												New project
											</a>
										</div>
									</div>
								</div>
								<div class="panel-body">
<?php
									if((bool)$projects->count())
									{
										echo '<ul>';
										foreach($projects as $project)
										{
											echo '<li>';
											echo $project->link();
											echo '</li>';
										}
										echo '</ul>';
									}
									else
									{
										echo '<em>None yet..!</em>';
									}
?>
								</div>
							</div>
							<li>
								<a href="<?php echo Site::route('user.logout'); ?>"><?php echo trans('buttons.logout'); ?></a>
							</li>
						<?php else: ?>
							<li>
								<div class="m__userForm">
									<h2 class="m__userForm-header">Log in</h2>
									<form role="form" action="<?php echo Site::route('user.login'); ?>" method="post" class="loginForm">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										
										<label for="email" class="m__userForm-label">Email</label>
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
											<input type="text" type="email" value="{{ old('email') }}" placeholder="<?php echo trans('forms.placeholders.email'); ?>" id="auth-email" name="email" class="form-control" aria-describedby="basic-addon2">
										</div>
										
										<label for="password" class="m__userForm-label">Password</label>	
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
											<input type="password" id="auth-password" placeholder="<?php echo trans('forms.placeholders.password'); ?>" value="{{ old('email') }}"  name="password" class="form-control" aria-describedby="basic-addon2">
										</div>


										<div class="m__userForm-footer">
											<div class="m__userForm-footerItem">
												<label>
													<input type="checkbox" name="remember"<?php echo (old('remember')=='yes'?' checked="checked"':'') ?> value="yes" /> <?php echo trans('forms.labels.staylogged'); ?>
												</label>
											</div>

											<div class="m__userForm-footerItem">
												<button class="btn btn-primary"><?php echo trans('buttons.login'); ?></button>
											</div>
										</div> <!-- end m__footer !-->
										<div class="m__userForm-register">
											<a href="<?php echo trans('routes.user.signup'); ?>" title="<?php echo trans('forms.login.signup'); ?>">Don't have an account?</a>
										</div>
									</form>
								</div>
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
