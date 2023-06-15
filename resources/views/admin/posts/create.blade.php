<x-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="price"/>
            <x-form.input name="kilometers"/>
            <x-form.input name="location"/>
            <x-form.input name="brand"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt" type="file"/>
            <x-form.textarea name="body" type="file"/>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>

</x-layout>
