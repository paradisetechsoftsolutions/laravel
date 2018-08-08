@extends('layouts.auth')

@section('content')
<section id="login-form" class="login-info-main">
    <div class="abt-login">
        <div class="login-logo">
            <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}">
            </a>
        </div>
        <div class="inner-login">
            <h3>{{ __('Login') }}</h3>
            
            <form method="POST" class="form-horizontal" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class="form-group">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="form-group btn-grp">
                    <div class="login-btn">
                        <button type="submit" class="btn btn-default">{{ __('Login') }}</button>
                    </div>
                </div>
            </form>

            <div class="create-account-info">
                <ul>
                    <li>
                        <a href="{{ route('register') }}">{{ __('Create an Account') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                    </li>
                </ul>
            </div>

            <div class="social-icon">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>
@endsection