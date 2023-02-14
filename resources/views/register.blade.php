@extends('master')

@section('title', 'Supplycart - Registration')

@section('body')
    <div>
        <div class="bg-gray-200 flexx justify-center">
            <div class="w-full max-w-xs">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text"
                            class="border border-slate-400 @error('name') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                            placeholder="John Doe" required>
                        @error('name')
                            <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email"
                            class="border border-slate-400 @error('email') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                            placeholder="john@example.com" required>
                        @error('email')
                            <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password"
                            class="border border-slate-400 @error('password') focus:border-rose-600 @else focus:border-sky-400 @enderror"
                            required>
                        @error('password')
                            <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
