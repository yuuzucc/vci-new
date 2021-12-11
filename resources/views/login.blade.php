<!DOCTYPE html>
<html lang="en">
@extends('layout.main')

@section('container')

<body>
  <header>
    <!-- link style sign up & login-->
    <link rel="stylesheet" href="css/styles-signlogin.css">
    
    <div class="container text-center">
      <h1 style="margin-top: 2rem;margin-bottom: -2rem;"><b>~ Login ~</b></h1>
    </div>
  </header>

  <main class="form-signin">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-9 bg-white p-3" style="padding-top: 20px;">
          <div class="box" style="background: url('img/card-bg.png');background-size: cover;border-radius: 10px;">
            <form>
              <div class="mb-3">
                <label for="username" class="form-label" style="color: white">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label" style="color: white">Password</label>
                <input type="password" class="form-control" id="password">
              </div>
              <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 2rem;">
                <a href="/dashboard" type="submit" class="btn btn-danger">Login</a>
              </div>
            </form>
            <div class="text-light d-block text-center mt-3">Don't have account yet?
              <a href="/signup">Sign up now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
@endsection

</html>