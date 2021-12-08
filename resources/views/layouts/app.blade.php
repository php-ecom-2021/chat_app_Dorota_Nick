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
    @yield('content')
</body>
</html>