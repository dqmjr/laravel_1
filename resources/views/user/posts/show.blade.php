@extends('templates.main')

@section('main.content')
    <x-title>
        <div class="border-bottom">
            {{ $post->title }}
        </div>
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
