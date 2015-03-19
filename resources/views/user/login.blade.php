@extends('app')

@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="col-sm-12 col-m-3">
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
				 	<input type="password" id="auth-password" placeholder="<?php echo trans('forms.placeholders.email'); ?>" value="{{ old('email') }}"  name="password" class="form-control" aria-describedby="basic-addon2">
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
		</div> <!-- end m__userForm !-->
	</div> <!-- end col-sm-6 !-->
@endsection