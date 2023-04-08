@props(['post' => ''])
<x-form {{ $attributes }} method="POST">
    <x-label required>
        {{__('Название поста')}}
    </x-label>
    <x-input name="title" value="{{ $post->title ?? '' }}" autofocus />

    <x-label>
        {{__('Текст поста')}}
    </x-label>
    {{--        <x-textarea name="content" rows="10" />--}}
    <form …>
        <input id="x" type="hidden" value="{{ $post->text ?? '' }}" >
        <trix-editor input="x" class="mb-2" >

        </trix-editor>
    </form>
</x-form>
