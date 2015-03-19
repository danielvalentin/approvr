@extends('app')

@section('content')
<div class="container">
	<section class="gridContainer">
		<h2>Sign up</h2>
		
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
		
		<form role="form" action="/signup" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="auth-email">Your e-mail:</label>
				<input type="text" placeholder="Your e-mail address" id="auth-email" value="{{ old('email') }}" name="email" class="form-control" />
			</div>
			<div class="form-group">
				<label for="auth-username">Desired username:</label>
				<input type="text" placeholder="Your desired username" id="auth-username" value="{{ old('username') }}" name="username" class="form-control" />
			</div>
			<div class="form-group">
				<label for="auto-password">Password:</label>
				<input type="password" id="auth-password" placeholder="Your password..." name="password" class="form-control" />
			</div>
			<div class="form-group text-right">
				<button class="btn btn-primary">Sign up</button>
			</div>
		</form>
	</section>
</div>
@endsection