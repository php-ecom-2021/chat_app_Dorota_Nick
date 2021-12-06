@extends('layouts.app')

@section('content')
<div class="w-full h-screen flex justify-center items-center">
    <div class="w-3/12 h-auto bg-white rounded-lg p-8 pt-16">
        <h1 class="text-center font-bold text-blue-500 text-6xl">Chatter</h1>

        <div class="mt-16">
            <h2 class="font-bold text-4xl mb-8">Login</h2>
            @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-4 text-white text-center font-bold">
                {{session('status')}}
            </div>
            @endif
            <form method="post" action="{{route('login')}}" >
                @csrf
                <div class="mb-4">
                    <div class="flex  @error('email') border-2 rounded-lg border-red-500 @enderror">
                        <div class="bg-gray-200 p-4 pr-0 rounded-l-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="bg-gray-200 w-full p-4 rounded-r-lg placeholder-black cursor-text placeholder-opacity-50" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex  @error('password') border-2 rounded-lg border-red-500 @enderror">
                    <div class="bg-gray-200 p-4 pr-0 rounded-l-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                    </div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-200 w-full p-4 rounded-r-lg placeholder-black cursor-text placeholder-opacity-50">
                    </div>
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 font-bold text-white p-3 rounded w-full">Log in</button>
                </div>
            </form>

            <p class="text-center">Don't have an account? <a class="text-blue-500" href="{{route('register')}}">Register</a></p>
        </div>
    </div>
</div>
</div>
@endsection