@extends('templates.main')

@section('main.content')
    <x-title>
        {{ __('Мои посты') }}
    </x-title>

    <div>
        @if(empty($posts))
            {{ __('Empty') }}
        @else
            @foreach($posts as $post)
                <div class="mb-3">
                    <h2 class="h6">
                        <a href="{{ route('user.posts.show', $post->id) }}">
                            <h2 class="h6">
                                {{ $post->title }}
                            </h2>
                        </a>
                    </h2>
                    <div class="muted">
                        <p>
                            {{ now() }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
