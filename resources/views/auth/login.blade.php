@extends('layouts.app')

@section('title', 'Retention through stickiness')

@section('styles')
<style>
    .login-container {
        background: white;
        padding: 2.5rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    .page-title {
        color: #D40511;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 1.5rem;
        text-transform: capitalize;
    }

    .hero-image {
        width: 100%;
        max-width: 300px;
        margin-bottom: 2rem;
        border-radius: 8px;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .input-group {
        position: relative;
    }

    .input-field {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 6px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .input-field:focus {
        border-color: #D40511;
        outline: none;
        box-shadow: 0 0 0 3px rgba(212, 5, 17, 0.1);
    }

    .login-btn {
        background-color: #D40511;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    .login-btn:hover {
        background-color: #AA040E;
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .forgot-password {
        color: #666;
        text-decoration: none;
        font-size: 14px;
        margin-top: 1rem;
        display: inline-block;
        transition: color 0.3s ease;
    }

    .forgot-password:hover {
        color: #D40511;
    }

    .subtitle {
        color: #666;
        font-size: 14px;
        margin-bottom: 2rem;
        line-height: 1.4;
    }

    .dhl-logo {
        width: 150px;
        margin-bottom: 1rem;
    }

    .error-message {
        color: #D40511;
        font-size: 14px;
        margin-top: 0.25rem;
        text-align: left;
    }
</style>
@endsection

@section('content')
<div class="min-h-screen bg-[#e6f3f7] flex justify-center items-center p-4">
    <div class="login-container">
        <img src="{{ asset('images/logo.png') }}" alt="DHL Logo" class="dhl-logo">
        <h1 class="page-title">Retention through stickiness</h1>
        <p class="subtitle">Connect to your account to manage your delivery preferences and tracking</p>
        
        <img src="{{ asset('images/hero-image.png') }}" alt="Shipping Illustration" class="hero-image">
        
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            
            <div class="input-group">
                <input 
                    type="email" 
                    name="email" 
                    class="input-field @error('email') border-red-500 @enderror" 
                    placeholder="Email Address" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus
                >
                @error('email')
                    <span class="error-message" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="input-group">
                <input 
                    type="password" 
                    name="password" 
                    class="input-field @error('password') border-red-500 @enderror" 
                    placeholder="Password" 
                    required 
                    autocomplete="current-password"
                >
                @error('password')
                    <span class="error-message" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="flex items-center mb-4">
                <input 
                    type="checkbox" 
                    name="remember" 
                    id="remember" 
                    class="mr-2" 
                    {{ old('remember') ? 'checked' : '' }}
                >
                <label for="remember" class="text-sm text-gray-600">
                    Remember Me
                </label>
            </div>

            <button type="submit" class="login-btn">
                {{ __('Sign In') }}
            </button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-password">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>

        @if (session('status'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>
@endsection