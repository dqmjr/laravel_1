@extends('templates.base')
{{--@section('page.title', $post->title)--}}
@section('content')
    <h1>
        {{ $post->title }}
    </h1>
    <div>
        <p>
            {{ $post->text }}
        </p>
    </div>
    <a href="{{ route('blog.index') }}">Back</a>
@endsection
