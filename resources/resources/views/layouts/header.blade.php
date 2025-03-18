<header class="sticky-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                MyApp
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('learn.more') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('learn.more') }}">Learn More</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Web Development</a>
                            <a class="dropdown-item" href="#">Mobile Apps</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Consultation</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

                <!-- Auth Links -->
                <div class="ml-3">
                    @auth
                        <a class="btn btn-light">Dashboard</a>
                    @else
                        <a class="btn btn-outline-light">Login</a>
                        <a class="btn btn-light ml-2">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>