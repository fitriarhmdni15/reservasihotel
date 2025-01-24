@extends('layouts.app')

@section('content')
<style>
    /* Gaya CSS untuk tampilan login */
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f6f9;
    }

    .login-card {
        width: 100%;
        max-width: 400px;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .login-card-header {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        outline: none;
    }

    .form-group input:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .form-group .invalid-feedback {
        color: red;
        font-size: 12px;
    }

    .form-check {
        margin-bottom: 20px;
    }

    .form-check input {
        width: auto;
        margin-right: 10px;
    }

    .btn-login {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: white;
        cursor: pointer;
    }

    .btn-login:hover {
        background-color: #0056b3;
    }

    .link-forgot-password {
        display: block;
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
    }

    .link-forgot-password a {
        color: #007bff;
        text-decoration: none;
    }

    .link-forgot-password a:hover {
        text-decoration: underline;
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-card-header">
            {{ __('Login') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

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

                <div class="form-group">
                    <button type="submit" class="btn-login">
                        {{ __('Login') }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <div class="link-forgot-password">
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
