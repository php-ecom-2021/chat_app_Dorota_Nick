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
<div class="w-full h-screen flex justify-center items-center">
    <div class="w-3/12 h-auto bg-white rounded-lg text-center p-8 pt-16">
        <h1 class="font-bold text-4xl">Welcome to <br><span class="text-blue-500 text-6xl">Chatter</span></h1>

        <div class="mt-32">
            <div>
                <a href="{{route('login')}}" class="block bg-blue-500 font-bold text-white p-3 rounded w-full">Log in</a>
            </div>
            <div>
                <a href="{{route('register')}}" class="block border-2 border-blue-500 bg-white font-bold text-blue-500 p-3 rounded w-full mt-4">Register</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>