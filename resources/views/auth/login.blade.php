{{--<x-guest-layout>--}}

@extends('components.layout')

@section('content')
    <div class="card m-5 p-5 content-center">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <figure class="figure pt-3">
            <img class="figure-img img-fluid rounded" src="{{asset('images/gfpi_img.png')}}" alt="GFPI">
        </figure>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group col-12">
            <div class="form-floating mb-3">
                <input type="email" id="email" class="form-control bg-primary-subtle" name="email"
                       :value="old('email')" required autofocus autocomplete="username"
                       placeholder="E-mail"
                    {{'required'}}>
                <label for="email" class="text-black">E-mail</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Password -->
        <div class="form-floating mb-3">
            <input type="password" id="password" class="form-control bg-primary-subtle" name="password"
                   :value="old('email')" required autofocus autocomplete="username"
                   placeholder="Senha"
                {{'required'}}>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <label for="password" class="text-black">Senha</label>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Lembrar') }}</span>
            </label>
        </div>

        <div class="flex">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif

            <div class="text-end">
                <button class="btn btn-outline-light text-white " type="submit" >{{ __('Entrar') }}</button>
            </div>
        </div>
    </form>
    </div>
@endsection
{{--</x-guest-layout>--}}
