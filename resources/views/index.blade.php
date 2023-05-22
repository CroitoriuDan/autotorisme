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
        <a href="send-sms-notification">2FA</a>
    @endguest

    @auth
        <h1> Welcome, {{ auth()->user()->name }}</h1>
        <form method="POST" action="/logout">
        @csrf
            <button type="submit">Log Out</button>
        </form>
    @endauth

    <h1 class="mt-6 ml-4 text-9xl">SCHEMA</h1>

    <form method="GET" action="/">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="kilometers">
            </label>
            Search By Kilometers
            <input class="border border-gray-400 p-2 w-full" type="search" name="kilometers" id="kilometers">
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="search">
            </label>
            Search By Name
            <input class="border border-gray-400 p-2 w-full" type="search" name="search" id="search">
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>
    </form>

    <h1>
        @foreach ($posts as $post)
            <a href="/posts/{{ $post->id }}" class="text-5xl text-blue-700 underline">{{ $post->name }}</a>
            <h1 class="mt-6 text-2xl">{{ $post->description }}</h1>
            <h1 class="text-2xl">Price: ${{ $post->price }}</h1>
        @endforeach
    </h1>
</body>
</html>
