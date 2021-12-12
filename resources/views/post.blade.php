@extends('layout.main')

@section('container')
    <h1 class="text-center mt-3"></h1>
    <div class="container" style="margin-top: 2rem;margin-bottom: 2rem;">
        <div class="card mb-3">
            {!! $post->body !!}
        </div>
        <a href="/" class="card-link">Back to home</a>
    </div>
@endsection
