@extends('templates.main')

@section('page.title', $post->title)

@section('main.content')

    <x-title>
        {{ $post->title }}

        <x-slot name="link">
            <a href="/blog">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>

    {!! $post->text !!}
@endsection
