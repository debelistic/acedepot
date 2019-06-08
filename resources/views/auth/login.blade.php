@extends('layout.app')

@section('content')
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/slider2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="inner-header">
                <h3>In prevailing adverse economy, we position you for growth in life, career and business</h3>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section>
	<div class="register_signin_wrapper">
			<div class="register_signin">
					
				<div class="container">
						<div class="col-md-8">
								<div class="card register_form">
										<div class="card-header">{{ __('Register') }}</div>
		
										<div class="card-body">
												<select name="role" form="user_register">
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
		
														<div class="form-group row form_input">
															<input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
															<label for="first_name" class="col-md-4 col-form-label text-md-right label_name">
																<span class="content_name">{{ __('First Name') }}</span>
															</label>
															@error('first_name')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
														</div>

														<div class="form-group row form_input">
															<input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
															<label for="last_name" class="col-md-4 col-form-label text-md-right label_name">
																<span class="content_name">{{ __('Last Name') }}</span>
															</label>
															@error('name')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
														</div>
		
														<div class="form-group row form_input">
															<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
															<label for="email" class="col-md-4 col-form-label text-md-right label_name">
																<span class="content_name">{{ __('E-Mail Address') }}</span>
															</label>
															@error('email')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror																
														</div>
		
														<div class="form-group row form_input">					
															<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
															<label for="password" class="col-md-4 col-form-label text-md-right label_name">
																<span class="content_name">{{ __('Password') }}</span>
															</label>
															@error('password')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
														</div>
		
														<div class="form-group row form_input">
															<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
															<label for="password-confirm" class="col-md-4 col-form-label text-md-right label_name">
																<span class="content_name">{{ __('Confirm Password') }}</span>
															</label>																
														</div>
														<input type="submit" class="btn btn-primary" value="{{ __('Register') }}">
														<div class="form_p">
															<p>have an account <span class="signup login_form">signin</span></p>
														</div>
												</form>

										</div>
								</div>
						</div>
				</div>
					
				

				<div class="signin_form">
					<div class="container">
							<div class="row justify-content-center">
									<div class="col-md-8">
											<div class="card">
													<div class="card-header">{{ __('Login') }}</div>

													<div class="card-body">
															<form method="POST" action="{{ route('login') }}">
																	@csrf

																	<div class="form-group row form_input">
																			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
																			<label for="email" class="col-md-4 col-form-label text-md-right label_name">
																					<span class="content_name">{{ __('E-Mail Address') }}</span>
																			</label>
																			@error('email')
																				<span class="invalid-feedback" role="alert">
																					<strong>{{ $message }}</strong>
																				</span>
																			@enderror
																	</div>
																	

																	<div class="form-group row form_input">
																			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
																			<label for="password" class="col-md-4 col-form-label text-md-right label_name">
																					<span class="content_name">{{ __('Password') }}</span>
																			</label>
																			@error('password')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																			@enderror
																	</div>
																	
																	
																	<div class="form-check">
																			<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
																			<label class="form-check-label" for="remember">
																					{{ __('Remember Me') }}
																			</label>
																	</div>
																		

																	
																	<input type="submit" class="btn btn-primary" value="{{ __('Login') }}">
																	<div class="form_p">
																	<p >don't have an account <span class="signup">signup</span></p>
																	</div>

																	@if (Route::has('password.request'))
																			<a class="btn btn-link form_a" href="{{ route('password.request') }}">
																					{{ __('Forgot Your Password?') }}
																			</a>
																	@endif
																			
															</form>
													</div>
											</div>
									</div>
							</div>
					</div>
				</div>
			</div>
	</div>
</section>
@endsection
