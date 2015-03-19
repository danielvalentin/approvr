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

	<form role="form" method="POST" action="<?php echo trans('routes.user.signup'); ?>">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label class="control-label"><?php echo trans('forms.labels.name'); ?></label>
			<input type="text" placeholder="<?php echo trans('forms.placeholders.name');?>" class="form-control" name="name" value="{{ old('name') }}">
		</div>

		<div class="form-group">
			<label class="control-label"><?php echo trans('forms.labels.emailaddress'); ?></label>
			<input type="email" placeholder="<?php echo trans('forms.placeholders.emailaddress');?>" class="form-control" name="email" value="{{ old('email') }}">
		</div>

		<div class="form-group">
			<label class="control-label"><?php echo trans('forms.labels.password'); ?></label>
			<input type="password" class="form-control" placeholder="<?php echo trans('forms.placeholders.password');?>" name="password">
		</div>

		<div class="form-group">
			<label class="control-label"><?php echo trans('forms.labels.passwordconfirm'); ?></label>
			<input type="password" class="form-control" placeholder="<?php echo trans('forms.placeholders.passwordconfirm');?>" name="password_confirmation">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				<?php echo trans('buttons.signup'); ?>
			</button>
		</div>
	</form>
@endsection
