@extends('layout.main')

@section('container')

    <div class="container" style="margin-top: 2rem;margin-bottom: 2rem;">
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="card-title text-center m-4">{{ $post->title }}</h1>
                <div class="card-body">
                    <img src="{{ $post->bannerlink }}" class="card-img-top mb-3" alt="banner">
                    {!! $post->description !!}
                    <a href="#" class="btn btn-danger mt-2">Register</a>
                    <p class="card-text mt-5">
                        <small class="text-muted">{{ $post['created_at'] }}</small>
                    </p>
                </div>
            </div>
        </div>
        <a href="/" class="card-link">Back to homea></ <a href="/events" class="card-link">Back to events</a>
    </div>
@endsection
