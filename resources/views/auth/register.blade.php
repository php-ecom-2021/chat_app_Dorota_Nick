@extends('layouts.app')

@section('content')
<div class="w-full h-screen flex justify-center items-center">
    <div class="w-3/12 h-auto bg-white rounded-lg p-8 pt-16">
        <h1 class="text-center font-bold text-blue-500 text-6xl">Chatter</h1>

        <div class="mt-16">
            <h2 class="font-bold text-4xl mb-8">Register</h2>

            <form method="post" action="{{route('register')}}" enctype=”multipart/form-data”>
                @csrf
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <div class="flex w-full @error('name') border-2 rounded-lg border-red-500 @enderror">
                            <label for="name" class="sr-only">Name</label>
                            <div class="bg-gray-200 p-4 pr-0 rounded-l-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-200 w-full p-4 rounded-r-lg placeholder-black cursor-text placeholder-opacity-50" value="{{old('name')}}">
                        </div>
                        <label for="avatar" class="flex ml-4 border-2 border-blue-500 text-blue-500 p-4 rounded-lg cursor-pointer">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            Avatar
                            <input type="file" name="avatar" id="avatar" class="hidden" accept="image/*" value="{{old('avatar')}}">
                        </label>
                    </div>
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    @error('avatar')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

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
                    <div class="flex @error('password_confirmation') border-2 rounded-lg border-red-500 @enderror">
                        <div class="bg-gray-200 p-4 pr-0 rounded-l-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </div>
                        <label for="password_confirmation" class="sr-only">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="bg-gray-200 w-full p-4 rounded-r-lg placeholder-black cursor-text placeholder-opacity-50">
                    </div>

                    @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 font-bold text-white p-3 rounded w-full">Register</button>
                </div>
            </form>

            <p class="text-center">Already have an account? <a class="text-blue-500" href="">Log in</a></p>
        </div>
    </div>
</div>
</div>
@endsection