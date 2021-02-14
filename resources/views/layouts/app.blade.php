<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="">
        <nav class="bg-black relative flex items-center justify-between sm:h-10 lg:justify-start p-6" aria-label="Global">
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="/">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden md:block md:ml-auto md:pr-4 md:space-x-8">
            
          </div>
             @guest
           
            <a href="{{ route('login') }}" class="font-medium text-white hover:text-indigo-500 mr-3">{{ __('Login ') }} </a>
             @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white p-2 bg-pink-600 hover:bg-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 ...">{{ __('Register ') }} </a>
           @endif
           @else
    <form action="/search" method="POST" role="search" class="w-1/2">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="mr-60 p-1 w-1/2" name="q"
            placeholder="Search"> <span class="input-group-btn">
        </span>
    </div>
</form>           
<a href="#" class="font-medium text-white hover:text-indigo-500 mr-3" >{{ Auth::user()->name }} </a>
             
             <a href="{{ route('logout') }}" class="font-medium text-indigo-600 hover:text-indigo-500" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white">
  <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
</svg></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </div>
 @endguest
        </nav>

        <main class="flex justify-center bg-gray-200">
            @yield('content')
        </main>
    </div>
</body>
</html>
