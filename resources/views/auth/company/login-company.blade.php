@extends('layouts.general')

@section('title', 'Login como Programador')

@section('content')
    <x-guest-layout text="Login como empresa">
        <form action="">
            @csrf
            {{-- Email --}}
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            {{-- Password --}}
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login-programmer') }}">
                    {{ __('Sou Programador') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
@endsection
