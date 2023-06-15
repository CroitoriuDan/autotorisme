<x-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title',$post->title)"/>
            <x-form.input name="price" :value="old('price',$post->price)"/>
            <x-form.input name="kilometers" :value="old('kilometers',$post->kilometers)"/>
            <x-form.input name="location" :value="old('location',$post->location)"/>
            <x-form.input name="brand" :value="old('brand',$post->brand)"/>
            <x-form.input name="slug" :value="old('slug',$post->slug)"/>
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                </div>
                <img src="{{asset('storage/'.$post->thumbnail)}}" alt="nu merge poza iar" class="rounded-xl ml-6" width="100">
            </div>
            <x-form.textarea name="excerpt" type="file"> {{old('excerpt',$post->excerpt)}} </x-form.textarea>
            <x-form.textarea name="body" type="file"> {{old('body',$post->body)}} </x-form.textarea>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>

</x-layout>
