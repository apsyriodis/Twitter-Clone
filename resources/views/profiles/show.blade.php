@extends('layouts.app')

@section('title')
    <title>{{ $user->name }} {{ '(@' . $user->username }}) / Tweety</title>
@endsection

@section('content')
    <header class="mb-6 relative border border-blue-500 rounded-2xl">
        <img 
        src="/images/default-profile-banner.jpg" 
        alt=""
        class="border border-blue-500 rounded-2xl"
        >
        
        <div class="flex justify-between items-center">
            <div class="lg:pt-20 pt-8">
                <h2 class="font-bold text-2xl mb-0 m-2 mt-6 ml-4">{{ $user->name }}</h2>
                <p class="text-sm m-2 ml-4 mb-4">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <x-edit-profile-button :user="$user"></x-edit-profile-button>

                <x-follow-button :user="$user" ></x-follow-button> <!-- component -->
            </div>

        </div>
            <img
                src="{{ $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute border border-blue-500 lg:top-40 top-16 lg:w-40 lg:h-40 h-30 w-20 lg:left-5 left-1"
            >

            <p class="text-sm mx-4 mt-2 mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Distinctio libero magni fugit ab accusamus officiis, 
                id quia dolorem ullam accusantium assumenda at impedit quisquam tempore sit molestiae sint ipsa reprehenderit!
            </p>

    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])

@endsection
