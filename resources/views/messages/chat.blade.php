@extends('messages')

@section('chat')
    <div>
        <header id="chatHeader"></header>
        <div id="chatHistory"></div>
        <form action="" method="post">
            <label for="chatInput" class="sr-only">Chat Input</label>
            <input type="text" name="chatInput">
            <button type="submit">Send</button>
        </form>
    </div>
@endsection