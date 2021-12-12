<!DOCTYPE html>
<html lang="en">
<!-- link style sign up & login-->
<link rel="stylesheet" href="css/styles-signlogin.css">
@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-sm-9">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        </div>
    </div>
    <div class="position-relative">

        <header>
            <div class="container text-center mb-5">
                <h1 style="margin-top: 2rem;margin-bottom: -2rem;"><b>~ Login ~</b></h1>
            </div>
        </header>

        <main class="form-signin">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-9 bg-white p-3" style="padding-top: 20px;">
                        <div class="box"
                            style="background: url('img/card-bg.png');background-size: cover;border-radius: 10px;">
                            <form action="/login" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label" style="color: white">Username</label>
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        autofocus>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label" style="color: white">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 2rem;">
                                    <button type="submit" class="btn btn-danger">Login</button>
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

    </div>
@endsection

</html>
