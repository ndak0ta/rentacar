<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-md">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" class="h-16">
            <span class="text-uppercase text-danger text-justify text-3xl font-weight-bold">rentacar</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ofisler') }}">Ofislerimiz<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/arabalar') }}">Arabalarımız<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kampanyalar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Yurtiçi Kampanyalar</a>
                        <a class="dropdown-item" href="#">Yurtdışı Kampanyalar</a>
                        <a class="dropdown-item" href="#">Tüm Kampanyalar</a>
                        <a class="dropdown-item" href="#">Tüm Kampanyalar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
