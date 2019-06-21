@extends('layout.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}" />
@endsection

@section('content')
<section class="top-sec-margin">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header auth_header">{{ __('Verify Your Email Address') }}</div>
            
                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
            
                                <p class="auth_options">{{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

@endsection
