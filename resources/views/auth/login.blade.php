@extends('layouts.layout')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="shadow-box login-card">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="text-center">
                    <img src="{{ asset('assets/img/logo-big.png') }}" alt="Logo PDU">
                    <p class="bodytext gray mt-2">Login into your account</p>
                </div>
            </div>
            <div class="mb-3">
                <x-input-label class="subtitle mb-2" for="email" :value="__('Email')" /><br>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-3">
                <x-input-label class="subtitle mb-2" for="password" :value="__('Password')" /><br>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <x-primary-button class="button-primary">
                {{ __('Log in') }}
            </x-primary-button>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 mb-5">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-dark" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
            <hr>
            <div class="text-center my-4">
                Already have an account?
                <a href="{{ route('register') }}" class="btn btn-warning" style="text-decoration: none;">
                    {{ __('Sign Up') }}
                </a>
            </div>
        </div>
    </div>
</form>
