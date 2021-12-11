<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatter</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{asset('js/search.js')}}" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');

        *{
            font-family: 'DM Sans', sans-serif;
        }
    </style>
</head>
<body class="w-full h-screen bg-gray-100">
<div class="w-full h-screen flex">
    <div class="w-2/12 h-100">
        <div class="flex justify-between p-4 w-full">
            @if(auth()->user()->avatar)
                <img class=" w-16 h-16 rounded-full mr-4" src="{{asset('images/'.auth()->user()->avatar)}}">
            @else
                <img class=" w-16 h-16 rounded-full mr-4" src="{{asset('images/default_avatar.jpg')}}">
            @endif
            <div class="w-full">
                <h2 class="text-xl font-bold pb-2">{{auth()->user()->name}}</h2>
                <a class="flex w-max" href="">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>  
                    </i>
                     Edit profile</a>
            </div>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </button>
            </form>
        </div>
        <div class="w-full p-4 shadow-md">
            <form action="{{route('search')}}" method="get" name="search">
                @csrf
                <label for="search" class="sr-only">Search users</label>
                <input autocomplete="off" class="w-full rounded-full px-4 py-2" type="search" name="search" id="search" placeholder="Search user...">
            </form>
        </div>
        <div class="w-full" id="output">
            
        </div>
    </div>
    <div class="w-10/12 h-screen">
        @yield('chat')
    </div>
</div>
</body>
</html>
