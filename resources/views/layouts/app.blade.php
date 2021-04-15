<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/tweety_icon.png') }}"">
</head>
<body class="bg-gray-50 pl-6">
    <div id="app">
    <div onKeyPress="return checkSubmit(event)"/>
    
        <section class="pt-6 mb-6 page-wrap">
            <header class="container mx-auto">
                <a href="{{ asset('') }}">
                    <h1>
                        <img src="/images/logo.svg" alt="Tweety">        
                    </h1>
                </a> 
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
            
            <div class="lg:justify-center lg:flex ml-8">
                <div class="">
                    @include ('_sidebar-links')
                </div>
                    
                <div class="lg:flex-1 lg:mx-10" style="max-width:762px">
                    @yield ('content')                
                </div>

                @auth
                    <div class="pl-8 pr-20 p-4 mb-4 rounded-2xl bg-blue-100" style="height:fit-content;">
                        @include ('_friends-list')
                    </div>
                @endauth
            </div>

            </main>
        </section>

    </div>
</body>
</html>
