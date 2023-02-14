@extends('master')

@section('title', 'Supplycart - Registration')

@section('body')

    <div class="fixed bg-amber-400 h-32 w-full">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" name="email" type="email"
                class="border border-slate-400 @error('email') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                placeholder="john@example.com" required>
            @error('email')
                <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span>
            @enderror

            <label for="password">Password</label>
            <input id="password" name="password" type="password"
                class="border border-slate-400 @error('password') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                required>
            @error('password')
                <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span>
            @enderror
        </form>
        @error('email')
            <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
@endsection
