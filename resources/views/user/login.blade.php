@extends('app')

@section('content')
	<h2><?php echo trans('headers.login'); ?></h2>
	
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
	
	<form role="form" action="<?php echo trans('routes.user.login'); ?>" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="auth-username"><?php echo trans('forms.labels.email'); ?>:</label>
			<input type="email" value="{{ old('email') }}" placeholder="<?php echo trans('forms.placeholders.email'); ?>" id="auth-email" name="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="auto-password"><?php echo trans('forms.labels.password'); ?>:</label>
			<input type="password" id="auth-password" placeholder="<?php echo trans('forms.placeholders.password'); ?>" name="password" class="form-control" />
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="remember"<?php echo (old('remember')=='yes'?' checked="checked"':'') ?> value="yes" /> <?php echo trans('forms.labels.staylogged'); ?>
			</label>
		</div>
		<div class="form-group text-right">
			<button class="btn btn-primary"><?php echo trans('buttons.login'); ?></button>
			<p>
				<?php echo trans('forms.login.or'); ?> <a href="<?php echo trans('routes.user.signup'); ?>" title="<?php echo trans('forms.login.signup'); ?>"><?php echo trans('forms.login.signup'); ?></a>
			</p>
		</div>
	</form>
@endsection