@extends('layouts.app')

@section('title')
    <title>Register / Tweety</title>
@endsection

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-16 py-6 bg-gray-200 rounded-lg border border-blue-300 mt-8">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>

                    <input class="border border-blue-300 px-4 py-2 w-full" type="text" name="username" id="username"
                        placeholder="username" required autofocus>
                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>

                    <input class="border border-blue-300 px-4 py-2 w-full" type="text" name="name" id="name"
                        placeholder="your name" required autocomplete="name" autofocus>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="email">
                        email
                    </label>

                    <input class="border border-blue-300 px-4 py-2 w-full" type="email" name="email" id="email"
                        placeholder="your email address" required autocomplete="email" autofocus>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border border-blue-300 px-4 py-2 w-full" type="password" name="password"
                        id="password" placeholder="***********" required autocomplete="new-password" autofocus>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                        Password Confirmation
                    </label>

                    <input class="border border-blue-300 px-4 py-2 w-full" type="password"
                        name="password_confirmation" id="password_confirmation" placeholder="***********" required
                        autocomplete="new-password" autofocus>
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white rounded mt-4 mb-2 py-2 px-4 hover:bg-blue-600">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
