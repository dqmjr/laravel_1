@extends('templates.main')

@section('main.content')
    <x-title>
        {{ __('Posts list') }}
    </x-title>

    <div>
        @if(empty($posts))
            {{ __('Empty') }}
        @else
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-12 col-md-4">
                        <x-card>
                            <x-card-body>
                                <x-post.card :post="$post"/>
                            </x-card-body>
                        </x-card>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
