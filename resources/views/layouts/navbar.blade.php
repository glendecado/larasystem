<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <div class="d-flex align-items-between">
                    <div class="d-flex">

                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('main')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('guest.about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main')}}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main')}}">User</a>
                        </li>
                    </div>
                    @auth
                    <div class="nav-item dropdown position-absolute end-0 pe-5">
                        <a class="nav-link dropdown-toggle pe-5" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    @endauth
                </div>

            </ul>

        </div>
    </div>
</nav>