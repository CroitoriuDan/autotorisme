<script src="https://cdn.tailwindcss.com"></script>
<main class="max-w-lg mx-auto">
    <div class="shadow-inner h-screen flex items-center justify-center mt-3">
    <form method="POST" action="/register">
        @csrf

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="name">
            </label>
                Name
            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="name"
                id="name"
                value="{{old('name')}}"
                required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="username">
            </label>
                Username
            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="username"
                id="username"
                value="{{old('username')}}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
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

            @error('phone')
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
                Submit
            </button>
        </div>
    </form>
</div>
</main>
