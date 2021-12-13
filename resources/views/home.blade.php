<!DOCTYPE html>
<html lang="en">
@extends('layout.main')

@section('container')

    <body style="color: rgb(0,0,0);background: #141313;">
        <!--banner-->
        </nav><img class="img-fluid" src="img/banner.png">

        <!--body-->
        <div class="container" style="margin-top: 2rem;margin-bottom: 2rem;">
            <div class="row">

                <!-- kolom merah-->
                <div class="col-4">
                    <div class="card border-3 text-white" style=" background-color: black; border-color:red;">
                        <div class="card-body">
                            <!-- search-->
                            <h3>Search for event</h3>
                            <form action="/events" class="input-group mb-3">
                                <input type="search" class="form-control rounded me-3" placeholder="Search"
                                    aria-label="Search" name="search" aria-describedby="search-addon" />
                                <button type="submit" class="btn text-white rounded"
                                    style="background-color: red;">search</button>
                            </form>
                            <ul class="list-group">
                                @foreach ($posts as $post)
                                    @if ($post->category->id == 1)
                                        <a href="/events/{{ $post['slug'] }}"
                                            class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">{{ $post['title'] }}</h5>
                                            </div>

                                        </a>
                                    @endif
                                @endforeach
                            </ul>
                            <!-- teks link find a event-->
                            <h4 class="text-white m-1 mt-3"> <a href="/events" class="text-white">FIND A EVENT TO PLAY
                                    IN <i class="fa fa-play icon-panah-putih"></i></a> </h1>

                        </div>

                    </div>
                    <h4 class="text-white m-1 mt-3"> <a href="/events" class="text-white">See all news</a> </h1>
                </div>

                <div class="col-8">
                    <div class=" card-body rounded-3 text-white" style="background-color: red;">
                        <h3 class="card-title">Lastest News</h1>
                    </div>

                        <ul class="list-group ">
                            @foreach ($posts as $post)
                                @if ($post->category->id == 2)
                                <li class="list-date-event-100 list-date-news-top">
                                    <div class="row">
                                      <div class="fw-bold col-md-6 padding-list-group"><span><br>{{ $post['title'] }}</div>

                                      <!--icon panah merah-->
                                      <div class="col-md-6 text-end padding-list-group"><a href="/news/{{ $post['slug'] }}"><i class="fa fa-play icon-panah-merah"></i></a></div>
                                    </div>
                                  </li>
                                @endif
                            @endforeach

                        </ul>

                </div>







            </div>
        </div>
    </body>
@endsection

</html>
