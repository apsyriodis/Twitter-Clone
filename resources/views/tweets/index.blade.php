@extends('layouts.app')

@section('title')
    <title>Home / Tweety</title>
@endsection

@section('content')
    @include ('_publish-tweet-panel')
    
    @include ('_timeline')
@endsection
