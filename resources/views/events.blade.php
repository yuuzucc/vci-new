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
                <form class="input-group" action="/events" >
                    <h4 class="ms-3"> <span class="align-middle">Search</span> </h4>
                    <input type="search" class="form-control rounded ms-3 me-3" placeholder="insert event name, date, time, or format" name="search" aria-label="Search"
                        aria-describedby="search-addon" value="{{ request('search') }}"/>
                    <button type="submit" class="btn text-white rounded me-3" style="background-color: red;">Search</button>
                </form>
            </div>
        </div>

        <div class="col-11 mx-auto mb-4 card border-3 text-align">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Format</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($events as $post)

                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td><a href="/events/{{ $post['slug'] }}">{{ $post['title'] }}</a> </td>
                                <td>{{ $post['date'] }}</td>
                                <td>{{ $post['time'] }}</td>
                                <td>{{ $post->format }}</td>
                            </tr>

                    @endforeach

                </tbody>
            </table>
        </div>


    </body>
@endsection
