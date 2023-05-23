<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="text-2xl m-6" style="width:100%">
        <h1 class="text-center">{{$post->name}}</h1>
        <h1 class="">{{$post->body}}</h1>
        <h1 class="">Price: ${{ $post->price }}</h1>
    </div>
</body>
</html>
