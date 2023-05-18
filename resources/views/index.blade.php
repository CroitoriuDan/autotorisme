<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @guest
        <a href="/register">Register</a>
        <a href="/login">Log In</a>
    @endguest

    @auth
        <h1> Welcome, {{ auth()->user()->name }}</h1>
        <form method="POST" action="/logout">
        @csrf
            <button type="submit">Log Out</button>
        </form>
    @endauth

    <h1 class="mt-6 ml-4 text-9xl">SCHEMA</h1>
    <h1>
        @foreach($posts as $post)
            <div>{{$post->body}}</div>
        @endforeach
    </h1>
</body>
</html>
