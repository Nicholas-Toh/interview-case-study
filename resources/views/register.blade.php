@extends('master')

@section('title', 'Supplycart - Registration')

@section('body-class', 'bg-gray-200 h-full w-full m-0')

@section('body')
    <div class="flex justify-center mt-20">
        <div class="w-24 mb-10">
            <img src="{{ asset('/images/supplycart-logo.png') }}">
        </div>
    </div>
    <div class="flex justify-center w-full flex-col">
        <div class="m-auto w-full max-w-sm bg-white px-8 py-10 shadow-md rounded">
            <div class="mb-4 text-center">
                <p class="text-2xl">
                    Register Account
                </p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label class="block" for="name">Name</label>
                    <input id="name" name="name" type="text"
                        class="border border-slate-400 rounded w-full @error('name') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                        placeholder="John Doe" required>
                    @error('name')
                        <p class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block" for="email">Email</label>
                    <input id="email" name="email" type="email"
                        class="border border-slate-400 rounded w-full @error('email') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                        placeholder="john@example.com" required>
                    @error('email')
                        <p class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block" for="password">Password</label>
                    <input id="password" name="password" type="password"
                        class="border border-slate-400 rounded w-full @error('password') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                        required>
                    @error('password')
                        <p class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block" for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" name="confirm_password" type="password"
                        class="border border-slate-400 rounded w-full @error('confirm_password') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                        required>
                    @error('confirm_password')
                        <p class="block text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Register
                    </button>

                    <a href="{{ route('login') }}"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Already
                        have an account?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
