<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="send-sms-notification">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="phone">
            </label>
                Phone Number
            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="phone"
                id="phone"
                value="{{old('phone')}}"
                required
            >

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>

            @error('phone')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
    </form>

</body>
</html>
