@extends('layouts.app')

@section('title')
    <title>Explore/ Tweety</title>
@endsection

@section('content')
    <div class="border border-blue-500 rounded-2xl p-4">

        @foreach ($users as $user)
            <div class="flex items-center mb-4 border border-blue-400 pl-4 rounded-2xl p-2">
                <div>
                    <a href="{{ route('profile', $user->username) }}">
                        <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->username }}'s avatar"
                        class="rounded-full mr-2 border border-blue-500 lg:top-40 top-16 h-20 w-20 lg:left-5 left-1"
                        {{-- width="60px" --}}
                        >
                </div>
            
                <div>
                        <h4 class="font-bold mt-8">{{$user->name }}</h4>
                    @if($user != auth()->user())
                        <div class="text:sm ml-96">
                            <x-follow-button :user="$user" ></x-follow-button>
                        </div>
                    @else
                        <div class="text:sm ml-96">
                            <x-edit-profile-button :user="$user"></x-edit-profile-button>
                        </div>                        
                    @endif
                </div>
                </a>

            </div>
        @endforeach

        <div class="mb-2">
            {{ $users->links() }}
        </div>
    </div>
@endsection
