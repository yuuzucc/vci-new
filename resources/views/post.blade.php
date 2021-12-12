@extends('layout.main')

@section('container')

    <div class="container" style="margin-top: 2rem;margin-bottom: 2rem;">
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="card-title text-center m-4">{{ $post->title }}</h1>

                {!! $post->description !!}
                <a class="text-muted">{{ $post['created_at'] }}</a>
            </div>
        </div>
        <a href="/" class="card-link">Back to home</a>
    </div>
@endsection
