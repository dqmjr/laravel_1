@props(['post' => null])

<x-form {{ $attributes->merge([
    'method' => 'post',
]) }} >
    <x-form-item>
        <x-label required>
            {{__('Название поста')}}
        </x-label>
        <x-input name="title" value="{{ $post->title ?? '' }}" autofocus />
    </x-form-item>

    <x-form-item>
        <x-label required>
            {{__('Текст поста')}}
        </x-label>
        <input id="x" type="hidden" value="{{ $post->text ?? '' }}" >
        <trix-editor input="x" class="mb-2" />
    </x-form-item>
    <x-trix action="{{ route('user.posts.update', $post->id ?? '' ) }}" />
    <x-button  type="submit" size="sm">
        {{ __('Создать пост') }}
    </x-button>
</x-form>
