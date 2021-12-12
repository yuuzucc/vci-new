<!DOCTYPE html>
<html lang="en">
@extends('layout.main')

@section('container')

<body style="background: #141313; font-family: 'Noto Sans', sans-serif;">
    <div class="col-11 mx-auto mt-4 card-body rounded-3 text-white mb-3" style="background-color: red;">
        <h3 class="card-title">Event list</h3>
    </div>

    <div class="col-11 mx-auto mb-4 card border-3 text-white" style=" background-color: black; border-color:red;">
        <div class="card-body">
            <!-- search-->
            <div class="input-group">
                <h4 class="ms-3"> <span class="align-middle">Search</span> </h4>
                <input type="search" class="form-control rounded ms-3 me-3" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn text-white rounded me-3" style="background-color: red;">search</button>
            </div>
        </div>
    </div>

    <ul class="list-group col-11 mx-auto mb-5 ">
        @foreach ($posts as $post)

        @endforeach
        <a href="/events/{{ $post["id"] }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $post["title"] }}</h5>
                <small class="text-muted">{{ $post["created_at"] }}</small>
            </div>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small class="text-muted">And some muted small print.</small>
        </a>
        @endforeach
    </ul>


</body>
@endsection
