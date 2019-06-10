@extends('layout.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}" />
@endsection
@section('content')
	
    
<section class="auth_form_area">
	<main class="auth_main">
		<div class="main_overlay">
			<h1>In prevailing adverse economy, we position you for growth in life, career and business</h1>
		</div>
	</main>
	<aside class="auth_form">
		<h2 class="auth_header">{{ __('Register') }}</h2>

		<div class="">
			<select name="role" form="user_register" class="soflow-color">
				<option>Select Your Role</option>
				<option value="candiate">Candiate</option>
				<option value="contractor">Contractor</option>
				<option value="employer">Employer</option>
			</select>
			@error('role')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<form method="POST" action="{{ route('register') }}" id="user_register">
				@csrf

				<div class="auth_input">
					<label for="first_name" class="">
						<span class="content_name">{{ __('First Name') }}</span>
					</label>
					<input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					@error('first_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="auth_input">
					<label for="last_name" class="">
						<span class="content_name">{{ __('Last Name') }}</span>
					</label>
					<input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					@error('last_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="auth_input">
					<label for="email" class="">
						<span class="content_name">{{ __('E-Mail Address') }}</span>
					</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="auth_input">
					<label for="password" class="">
						<span class="content_name">{{ __('Password') }}</span>
					</label>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="auth_input">
					<label for="password-confirm" class="">
						<span class="content_name">{{ __('Confirm Password') }}</span>
					</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
				</div>
				<input type="submit" class="btn btn-primary" value="{{ __('Register') }}">
				<div class="">
					<a class="auth_options" href="{{route('login')}}">have an account <span class="signup login_form">signin</span></a>
				</div>
			</form>
		</div>
	</aside>
</section>
@endsection