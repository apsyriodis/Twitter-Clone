@extends('layouts.app')

@section('title')
    <title>Login / Tweety</title>
@endsection

@section('content') <div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-blue-300 rounded-lg mt-16">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input class="border border-blue-300 p-2 w-full" type="email" name="email" id="email"
                        autocomplete="email" autofocus required value="{{ old('email') }}" placeholder="your email address" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border border-blue-300 p-2 w-full" type="password" name="password" id="password"
                        autocomplete="current-password" placeholder="***********" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <div>
                        <input class="mr-1" type="checkbox" name="Remember" id="Remember"
                            {{old('remember') ? 'checked' : ''}}>
                        <label class="text-xs text-gray-700 font-bold uppercase" for="Remember">
                            Remember Me
                        </label>
                    </div>
                    @error('Remember')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600 mr-2">
                        Submit
                    </button>
                    @if (Route::has('password.request'))
                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
