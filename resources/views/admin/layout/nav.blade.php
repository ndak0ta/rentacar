<nav
    class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top"
>
    <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="{{ url('/admin') }}">Rentacar Admin Panel</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle p-0"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <i class="material-icons icon">
                        person
                    </i>
                    <span class="text">Account</span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdown"
                >
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
