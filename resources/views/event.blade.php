<!DOCTYPE html>
<html lang="en">
@extends('layout.main')

@section('container')

    <div class="container" style="margin-top: 2rem;margin-bottom: 2rem;">
        <div class="card mb-3">
            <img src="/img/bannerod.jpg" class="card-img-top" alt="banner">
            <div class="card-body">
                <h5 class="card-title">Card Corner Gym Battle at Hangout Cafe Dutamas</h5>
                <p class="card-text">Tournament ID T211100GH</p>
                <h5><i class="bi bi-shop"> Organizer </i>: Card Corner Toys City</h5>
                <h5><i class="bi bi-calendar-event"> Tournament Date </i>: 09 Dec 2021</h5>
                <h5><i class="bi bi-clock"></i> Start Time </i>: 19:00 (GMT +7)</h5>
                <h5><i class="bi bi-person-badge"></i> Format </i>: D-Standard</h5>
                <a href="#" class="btn btn-danger">Register</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <a href="/event" class="card-link">Back to event</a>
    </div>

@endsection

</html>