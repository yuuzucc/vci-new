<!--navbar-->

<nav class="navbar navbar-light navbar-expand-lg navigation-clean-button"
    style="background: url('{{ asset('img/navbar.png') }}');box-shadow: 0 1px 5px rgb(0, 0, 0, 0.2);">
    <!--logo vanguard-->
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img class="img-fluid" src="{{ asset('img/logo.png') }}" width="100">
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/player">My Event</a></li>
                            <li><a class="dropdown-item" href="/events">Events</a></li>
                            <li><a class="dropdown-item" href="/news">News</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log Out</button>
                                </form>

                            </li>
                        </ul>
                    </li>
                @else

                    <li class="nav-item">
                        <a class="nav-link text-light" href="/login"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
