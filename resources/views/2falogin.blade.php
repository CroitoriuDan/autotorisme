<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="shadow-inner h-screen flex items-center justify-center">
    <form method="POST" action="2falogin">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="code">
            </label>
                Enter the code
            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="code"
                id="code"
                required
            >

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>

            @error('code')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
    </form>
    </div>
</body>
</html>
