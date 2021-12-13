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
                    <input type="search" class="form-control rounded ms-3 me-3" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn text-white rounded me-3" style="background-color: red;">search</button>
                </div>
            </div>
        </div>

        <div class="col-11 mx-auto mb-4 card border-3">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)
                        @if ($post->category->id == 1)
                            <tr>

                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="/events/{{ $post['slug'] }}">{{ $post['title'] }}</a> </td>
                                <td>{{ $post['date'] }}</td>

                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
        </div>


    </body>
@endsection
