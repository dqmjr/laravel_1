@extends('templates.main')

@section('main.content')
    <x-link href="{{ route('user.posts.index') }}">
        {{ __('Назад') }}
    </x-link>

    <x-title>
        {{ __('Создать пост') }}
    </x-title>

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
            <trix-editor input="x"></trix-editor>
        </form>
    </x-form>

    <x-button>
        {{ __('Создать пост') }}
    </x-button>

    @push('css')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    @endpush

    @push('js')
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    @endpush
@endsection
