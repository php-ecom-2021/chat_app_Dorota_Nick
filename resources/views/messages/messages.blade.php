@extends('layouts.app')

@section('content')
<div class="w-full h-screen flex">
    <div class="w-2/12 h-100 bg-blue-100">
        <div class="flex justify-between p-4 w-full">
            @if(auth()->user()->avatar)
                <img class="w-16 h-16 rounded-full mr-4" src="{{asset('images/'.auth()->user()->avatar)}}">
            @else
                <img class="w-16 h-16 rounded-full mr-4" src="{{asset('images/default_avatar.jpg')}}">
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
        <div class="w-full p-4 drop-shadow">
            <form action="" method="get">
                <label for="search" class="sr-only">Search users</label>
                <input class="w-full rounded-full px-4 py-2" type="search" name="search" id="search" placeholder="Search user...">
            </form>
        </div>
        <div class="w-full">

        </div>
    </div>
    <div>

    </div>
</div>
@endsection