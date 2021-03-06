
@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            @if ($post->ispublic == 1)
        <div class="row pt-2 pb-4">
                @if ($post->image != null)
                <div class="col-6 offset-3">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
                @endif
        </div>
        <div class="row">

        </div>
            <div class="col-8 offset-2">
                <div>
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{ $post->user->name }}</span>
                            </a>
                        </span>
                    </p>
                </div>

                <p>{{ $post->text }}</p>
            </div>
            @endif
        </div>
            @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
    </div>
@endsection
