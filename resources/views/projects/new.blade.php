@extends('app')

@section('content')
	<h2>projects/new</h2>
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form role="form" method="POST" action="<?php echo Site::route('projects.new'); ?>">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<label for="project-name">Name</label>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Project Title" name="name">
		</div>

		<label for="project-description">Description</label>
		<div class="form-group">
			<textarea name="description" id="project-description" class="form-control" placeholder="Project Description">{{ old('description') }}</textarea>
		</div>

		<div class="form-group">
			<button class="btn btn-primary">Create project</button>
		</div>

	</form>
@endsection
