@extends('templates.main')

@section('main.content')
    <x-link>
        <a href="{{ route('user.posts.index') }}">
            {{ __('Назад') }}
        </a>
    </x-link>

    <x-title>
        {{ $post->title }}
        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.edit', $post->id) }}">
                {{ __('Изменить') }}
            </x-button-link>
        </x-slot>
    </x-title>

    <div>
        <div class="muted">
            <p>
                {{ now() }}
            </p>
            <p>
                {{ $post->text }}
            </p>
        </div>
    </div>
@endsection
