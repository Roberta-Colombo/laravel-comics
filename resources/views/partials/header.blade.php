<header>
    <div class="top-blue-bar">
        <div class="container d-flex justify-content-end">
            <div>DC PowerVisa</div>
            <div class="pad-left20">Additional DC Sites</div>
        </div>
    </div>
    <div class="container nav-div d-flex justify-content-between align-items-center">
        <div id="logo" class="text-center">
            <img id="logo-img" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <nav class="container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        CHARACTERS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics') }}">
                        COMICS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        MOVIES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        TV
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        GAMES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        COLLECTIBLES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        VIDEOS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        FANS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        NEWS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        SHOP
                    </a>
                </li>
            </ul>
        </nav>
        <div>
            <input type="text" placeholder="Search">
        </div>
    </div>

    {{-- jumbotron --}}
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Cartoon Decoration">
    </div>
   
</header>