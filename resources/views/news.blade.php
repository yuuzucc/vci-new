<!DOCTYPE html>
<html lang="en">
@extends('layout.main')

@section('container')

    <body style="background: #141313; font-family: 'Noto Sans', sans-serif;">
        <div class="col-9 mx-auto mt-5 mb-5">
            <div class="row">
                <div class="card-body rounded-3 text-white mb-4" style="background-color: red;">
                    <h3 class="card-title">News list</h3>
                </div>

                <div class="card border-3 text-white" style=" background-color: black; border-color:red;">
                    <div class="card-body">
                        <!-- search-->
                        <form class="input-group" action="/news">
                            <h4 class="ms-3"> <span class="align-middle">Search</span> </h4>
                            <input type="search" class="form-control rounded ms-3 me-3" placeholder="Search" name="search"
                                aria-label="Search" aria-describedby="search-addon" value="{{ request('search') }}" />
                            <button type="submit" class="btn text-white rounded me-3"
                                style="background-color: red;">search</button>
                        </form>
                    </div>
                </div>

                <div class="album py-5" style="background: #141313;">
                    <div class="container">

                        <div class="row row-cols-md-2 g-5">
                            @foreach ($posts as $post)

                                    <div class="col">
                                        <div class="card shadow-sm h-100">
                                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                src="{{ $post->bannerlink }}">

                                            <div class="card-body position-relative">
                                                <div class="card-title fw-bold">{{ $post['title'] }}</div>
                                                <p class="card-text">{{ $post->excerpt }}</p>
                                                <div class="d-flex justify-content-between align-items-center mt-5">
                                                    <div class="btn-group position-absolute bottom-0 start-0 m-3">
                                                        <a type="button" href="/news/{{ $post['slug'] }}"
                                                            class="btn btn-danger" >View</a>
                                                    </div>
                                                    <small class="text-muted position-absolute bottom-0 end-0 m-2">{{ $post['created_at'] }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">{{ $posts->links() }}</div>
        </div>

    </body>


@endsection

</html>
