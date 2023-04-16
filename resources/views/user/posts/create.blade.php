@extends('templates.main')

@section('main.content')
    <x-link href="{{ route('user.posts.index') }}">
        {{ __('Назад') }}
    </x-link>

    <x-title>
        {{ __('Создать пост') }}
    </x-title>

    <x-post.form />

    <x-trix action="{{ route('user.posts.store') }}" />
@endsection
