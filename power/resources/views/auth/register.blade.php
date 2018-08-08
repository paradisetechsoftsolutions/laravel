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
            <h3>{{ __('Register') }}</h3>
            
            <form method="POST" class="form-horizontal" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="{{ __('Your Name') }}" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group btn-grp">
                    <div class="login-btn">
                        <button type="submit" class="btn btn-default">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>


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