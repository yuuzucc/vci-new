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
            <h3>Search for post</h3>
            <div class="input-group mb-3">
              <input type="search" class="form-control rounded me-3" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <button type="button" class="btn text-white rounded" style="background-color: red;">search</button>
            </div>
            <!-- teks link find a event-->
            <h4 class="text-white m-1"> <a href="/events" class="text-white">FIND A EVENT TO PLAY IN <i class="fa fa-play icon-panah-putih"></i></a> </h1>
          </div>
        </div>
      </div>

      <div class="col-8">
        <div class=" card-body rounded-3 text-white mb-3" style="background-color: red;">
          <h3 class="card-title">Lastest News</h1>
        </div>
        <div class="card ">

          <ul class="list-group ">

                @foreach ($posts as $post)
                <a href="/posts/{{ $post["slug"] }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $post["title"] }}</h5>
                        <small class="text-muted">{{ $post["created_at"] }}</small>
                    </div>
                    <p class="mb-1">{{ $post["category_id()->name"] }}</p>
                    <small class="text-muted">And some muted small print.</small>
                </a>
                @endforeach

          </ul>
        </div>
      </div>







    </div>
  </div>
</body>
@endsection

</html>
