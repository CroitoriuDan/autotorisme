<script src="https://cdn.tailwindcss.com"></script>
<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Buy Cars
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                <input type="text" name="search" placeholder="Name"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{request('search')}}">
                <input type="text" name="location" placeholder="Location"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{request('location')}}">
                <input type="text" name="brand" placeholder="Brand"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{request('brand')}}">
                <input type="text" name="kilometers" placeholder="Kilometers"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{request('kilometers')}}">
                <input type="text" name="price" placeholder="Price"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{request('price')}}">
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>
