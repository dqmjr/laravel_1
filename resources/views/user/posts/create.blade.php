@extends('templates.main')

@section('main.content')
    <x-link href="{{ route('user.posts.index') }}">
        {{ __('Назад') }}
    </x-link>

    <x-title>
        {{ __('Создать пост') }}
    </x-title>

    <x-post.form />

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
