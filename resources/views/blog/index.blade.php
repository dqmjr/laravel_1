@extends('templates.base')
@section('content')
    <h1>
        Posts list
    </h1>
    <div>
        @if(empty($posts))
           <p>Empty</p>
        @else
            @foreach($posts as $post)
                <div>
                    <a href="{{ route('blog.show', $post->id) }}">
                        <h6>
                            {{ $post->title }}
                        </h6>
                    </a>
                    <p>
                        {{ $post->text }}
                    </p>
                </div>

            @endforeach
        @endif
    </div>
@endsection
