@extends('app')

@section('content')
	<h2><?php echo trans('headers.signup'); ?></h2>
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
		<h2 class="m__userForm-header">Register</h2>
			<form role="form" method="POST" action="<?php echo trans('routes.user.signup'); ?>">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<label class="m__userForm-label"><?php echo trans('forms.labels.name'); ?></label>
				<div class="form-group">
					<input type="text" placeholder="<?php echo trans('forms.placeholders.name');?>" class="form-control" name="name" value="{{ old('name') }}">
				</div>

				<label class="m__userForm-label"><?php echo trans('forms.labels.emailaddress'); ?></label>
				<div class="form-group">
					<input type="email" placeholder="<?php echo trans('forms.placeholders.emailaddress');?>" class="form-control" name="email" value="{{ old('email') }}">
				</div>
				
				<label class="m__userForm-label"><?php echo trans('forms.labels.password'); ?></label>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="<?php echo trans('forms.placeholders.password');?>" name="password">
				</div>

				<label class="m__userForm-label"><?php echo trans('forms.labels.passwordconfirm'); ?></label>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="<?php echo trans('forms.placeholders.passwordconfirm');?>" name="password_confirmation">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						<?php echo trans('buttons.signup'); ?>
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection
