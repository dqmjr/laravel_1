<x-form action="{{ route('user.posts.store') }}" method="POST">
    <x-label required>
        {{__('Название поста')}}
    </x-label>
    <x-input name="title" autofocus />

    <x-label>
        {{__('Текст поста')}}
    </x-label>
    {{--        <x-textarea name="content" rows="10" />--}}
    <form …>
        <input id="x" value="Editor content goes here" type="hidden" name="content">
        <trix-editor input="x" class="mb-2">

        </trix-editor>.

    </form>
</x-form>
