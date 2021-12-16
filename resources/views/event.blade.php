@extends('layout.main')

@section('container')

    <div class="container" style="margin-top: 2rem;margin-bottom: 2rem;">
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="card-title text-center m-4">{{ $post->title }}</h1>
                <div class="card-body">
                    <img src="{{ $post->bannerlink }}" class="card-img-top mb-3" alt="banner">
                    <p class="card-text">Tournament ID {{ $post->slug }}</p>
                    <h5><i class="bi bi-calendar-event"> Tournament Date </i>: {{ $post->date }}</h5>
                    <h5><i class="bi bi-clock"></i> Start Time </i>: {{ $post->time }} WIB</h5>
                    <h5><i class="bi bi-person-badge"></i> Format </i>: {{ $post->format }}</h5>
                    <h5><i class="bi bi-shop"> Location </i>: {{ $post->desc }}</h5>
                    <form action="/player" method="POST">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $post->id }}">
                        <button type="submit" class="btn btn-danger mt-4" @if (Auth::user()->events->contains('id', $post->id))
                            disabled
                        @endif>Register</button>
                    </form>

                    <p class="card-text mt-4">
                        <small class="text-muted">{{ $post['created_at'] }}</small>
                    </p>
                </div>
            </div>
        </div>
        <a href="/" class="card-link">Back to home</a>
        <a href="/events" class="card-link">Back to events</a>
    </div>
@endsection
