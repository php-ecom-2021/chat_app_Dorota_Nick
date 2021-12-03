@extends('layouts.app')

@section('content')
<div class="w-full h-screen flex justify-center items-center">
    <div class="w-3/12 h-auto bg-white rounded-lg text-center p-8 pt-16">
        <h1 class="font-bold text-4xl">Welcome to <br><span class="text-blue-500 text-6xl">Chatter</span></h1>

        <div class="mt-32">
            <div>
                <a href="" class="block bg-blue-500 font-bold text-white p-3 rounded w-full">Log in</a>
            </div>
            <div>
                <a href="" class="block border-2 border-blue-500 bg-white font-bold text-blue-500 p-3 rounded w-full mt-4">Register</a>
            </div>
        </div>
    </div>
</div>
@endsection