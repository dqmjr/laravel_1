@extends('templates.main')

@section('main.content')
    <x-title>
        {{ $post->title }}
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
