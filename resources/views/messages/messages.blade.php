@extends('layouts.app')

@section('content')
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
        <div class="chat w-full h-screen relative">
            <header class="chatHeader w-full top-0 flex p-4 shadow-md">
                <img class=" w-16 h-16 rounded-full mr-4" src="{{asset('images/default_avatar.jpg')}}">
                <div class="w-full">
                    <h2 class="text-xl font-bold">Username</h2>
                </div>
                <div class="flex self-center">
                    <form action="">
                        @csrf
                        <button type="submit" class="px-4 py-2 mr-4 rounded-full font-bold bg-gray-200 text-red-500">Delete&nbsp;chat</button>
                    </form>
                    <form action="">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-full font-bold bg-gray-200">Unfriend</button>
                    </form>
                </div>
            </header>
            <div class="chatHistory w-full p-4">

            </div>
            <form class="p-4 flex absolute bottom-0 w-full" action="" method="post">
                <label for="chatInput" class="sr-only">Chat Input</label>
                <input class="px-4 py-2 rounded-full mr-4 bg-gray-200 w-full" type="text" name="chatInput" placeholder="Enter a message...">
                <button class="px-4 py-2 rounded-full text-blue-500 font-bold bg-gray-200" type="submit">Send</button>
            </form>
        </div>
        <div class="empty w-full h-screen grid place-items-center">
            <div class="w-3/12 text-center text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-48 w-48 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <p class="font-bold text-4xl">Select a user and start chatting.</p>
            </div>
        </div>
    </div>
</div>
@endsection