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
<div class="main-container">
	<div class="container" id="site-header">
		<div class="row">
			<div class="col-xs-12">
				<nav class="col-md-6" id="site-navigation">
					<ul>
						<li class="navigation__item">
							<a href="#" class="navigation__link">
								Company Name
							</a>
						</li>
						<li class="navigation__item">
							<a href="#" class="navigation__link">
								<span class="glyphicon glyphicon-user"></span> Users
							</a>
						</li>
						<li class="navigation__item">
							<a href="#" class="navigation__link">
								<span class="glyphicon glyphicon-signal"></span> Stats
							</a>
						</li>

						<li class="navigation__item">
							<a href="#" class="navigation__link">
								<span class="glyphicon glyphicon-plus"></span> Add
							</a>
						</li>

						<li class="navigation__item">
							<a href="#" class="navigation__link">
								<span class="glyphicon glyphicon-cog"></span> Options
							</a>
						</li>
					</ul>
				</nav>
				<div class="col-md-6">
					{{-- <form action="#" class="navbar__search pull-right">
						<input type="text" class="form-control">
					</form> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- end header !-->

		<!-- main content !-->
	<div class="container" id="site-body">
		<div class="row">
			<div class="col-xs-12 col-md-3" id="app-navigation">
					<?php if(Auth::check()): ?>
						<div class="module">
							<div class="module__header">
	<?php
										$user = Auth::user();
										$projects = $user->projects()->get();
	?>
										<h3>Your projects (<?php echo $projects->count(); ?>/5)</h3>
							</div>
							<div class="module__body">
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
									echo 'Not sure if project data should go here or something else? Maybe a list of the latest messages posted.';
									echo '<p style="padding: 0 0 20px 0; border-bottom: 1px solid #7b6d5e;"><b>Client:</b> I really like what you did with the header.</p>';
									echo '<p style="padding: 0 0 20px 0 border-bottom: 1px solid #7b6d5e;"><b>Client:</b> Please refine the edges on the logo.</p>';
								}
	?>						
						</div>
						<div class="module__footer">
							Doesn't have to be that. Just a thought.
						</div>
						</div>
							<a href="<?php echo Site::route('user.logout'); ?>"><?php echo trans('buttons.logout'); ?></a>
					<?php else: ?>
							<?php /* ZIS IZ VERE YOUR FORM STARTS! */ ?>
							<div class="m__userForm">
								<h2 class="module__header">Log in</h2>
								<form role="form" action="<?php echo Site::route('user.login'); ?>" method="post" class="loginForm">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									
									<label for="email">Email</label>
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
										<input type="text" type="email" value="{{ old('email') }}" placeholder="<?php echo trans('forms.placeholders.email'); ?>" id="auth-email" name="email" class="form-control" aria-describedby="basic-addon2">
									</div>
									
									<label for="password">Password</label>	
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
										<input type="password" id="auth-password" placeholder="<?php echo trans('forms.placeholders.password'); ?>" value="{{ old('email') }}"  name="password" class="form-control" aria-describedby="basic-addon2">
									</div>


									<footer class="module__footer">
										<div class="module__footer-item">
											<label>
												<input type="checkbox" name="remember"<?php echo (old('remember')=='yes'?' checked="checked"':'') ?> value="yes" /> <?php echo trans('forms.labels.staylogged'); ?>
											</label>
										</div>

										<div class="module__footer-item">
											<button class="btn btn-primary"><?php echo trans('buttons.login'); ?></button>
										</div>
									</footer> <!-- end m__footer !-->

									<div class="module__subFooter">
										<a href="<?php echo trans('routes.user.signup'); ?>" title="<?php echo trans('forms.login.signup'); ?>">Don't have an account?</a>
									</div>
								</form>
							</div>
							<?php /* ZIS IZ VERE YOUR FORM ENDS! */ ?>
					<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-9" id="site-content">
				@yield('content')
			</div>
		</div>
	</div> <!-- end container !-->
		
	<div class="container" id="site-footer">
		<div class="row">
			<div class="col-xs-12">
				 Footer
			</div>
		</div>
	</div>
</div><!--end main container !-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
