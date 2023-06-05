<script src="https://cdn.tailwindcss.com"></script>
<div class="shadow-inner h-screen flex items-center justify-center">
<form method="POST" action="/login">
    @csrf

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
            for="email">
        </label>
            Email
        <input class="border border-gray-400 p-2 w-full"
            type="email"
            name="email"
            id="email"
            value="{{old('email')}}"
            required
        >

        @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
            for="password">
        </label>
            Password
        <input class="border border-gray-400 p-2 w-full"
            type="password"
            name="password"
            id="password"
            required
        >

        @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-6">
        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            Log In
        </button>
    </div>
</form>
</div>
