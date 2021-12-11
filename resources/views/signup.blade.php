<!DOCTYPE html>
<html lang="en">
@extends('layout.main')

@section('container')

<body>
  <header>
    <!-- link style sign up & login-->
    <link rel="stylesheet" href="css/styles-signlogin.css">

    <div class="container text-center">
      <h1 style="margin-top: 2rem;margin-bottom: -2rem;"><b>~ Sign Up ~</b></h1>
    </div>
  </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-9 bg-white p-3" style="padding-top: 20px;">
        <div class="box" style="background: url('img/card-bg.png');background-size: cover;border-radius: 10px;">

          <form action="/signup" method="post">

            <div class="mb-3">
              <label for="email" class="form-label" style="color: white;margin-top: 2rem;">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email')}}">

              <div class="invalid-feedback">

              </div>

            </div>

            <div class="mb-3">
              <label for="username" class="form-label" style="color: white;">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{ old('username')}}">

              <div class="invalid-feedback">

              </div>

            </div>

            <div class="mb-3">
              <label for="password" class="form-label" style="color: white;">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" required>

              <div class="invalid-feedback">

              </div>

            </div>

            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 3rem;margin-bottom: 3rem;">
              <button class="btn btn-danger" type="submit">Sign Up</button>
            </div>
          </form>

          <div class="text-light ">
            By completing this form you agree to the <a href="#">terms and conditions.</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection

</html>