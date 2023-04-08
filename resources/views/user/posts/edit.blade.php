@extends('templates.main')

@section('main.content')
    <x-link href="{{ route('user.posts.index') }}">
        {{ __('Назад') }}
    </x-link>

    <x-title>
        {{ __('Изменить пост') }}
    </x-title>

    <x-post.form :post="$post" />

    <x-button>
        {{ __('Изменить пост') }}
    </x-button>

    <x-trix action="{{ route('user.posts.update', $post->id) }}" />
@endsection
