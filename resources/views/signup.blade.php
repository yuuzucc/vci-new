<!DOCTYPE html>
<html lang="en">
<!-- link style sign up & login-->
<link rel="stylesheet" href="css/styles-signlogin.css">

@extends('layout.main')

@section('container')
<header>
  <div class="container text-center mb-5">
    <h1 style="margin-top: 2rem;margin-bottom: -2rem;"><b>~ Sign Up ~</b></h1>
  </div>
</header>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-9 bg-white p-3" style="padding-top: 20px;">
      <div class="box" style="background: url('img/card-bg.png');background-size: cover;border-radius: 10px;">

        <form action="/signup" method="post">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label" style="color: white;margin-top: 2rem;">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email')}}">
            @error ('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="username" class="form-label" style="color: white;">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{ old('username')}}">
            @error ('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label" style="color: white;">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
            @error ('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
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

@endsection

</html>
