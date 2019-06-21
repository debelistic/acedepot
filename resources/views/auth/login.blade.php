@extends('layout.app')

@section('title')
   || Login
@endsection

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
		<h2 class="auth_header">{{ __('Login') }}</h2>
	
		<div class="">
			<form method="POST" action="{{ route('login') }}">
				@csrf
	
				<div class="auth_input">
					<label for="email" class="">
						<span class="content_name">{{ __('E-Mail Address') }}</span>
					</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
	
	
				<div class="auth_input">
					<label for="password" class="">
						<span class="">{{ __('Password') }}</span>
					</label>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
	
	
				<div class="">
					<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					<label class="checkbox_label" for="remember">
						{{ __('Remember Me') }}
					</label>
				</div>
	
	
	
				<input type="submit" class="btn btn-primary" value="{{ __('Login') }}">
				<div class="">
				<a class="auth_options" href="{{route('register')}}" >don't have an account <span class="signup">signup</span></a>
				</div>
	
				@if (Route::has('password.request'))
				<a class="auth_options" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
				@endif
			</form>
			
		</div>		
	</aside>
</section>
@endsection