<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(57, 66, 77)">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: #eaf4b7">Fatah Dev</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-5">

                <li class="nav-item">
                    <a href="/" class="nav-link text {{ Request::is('/') ? 'active' : '' }}">Home</a>
                </li>

                <li class="nav-item">
                    <a href="/about" class="nav-link text {{ Request::is('about') ? 'active' : '' }}">About</a>
                </li>

                <li class="nav-item">
                    <a href="/projects" class="nav-link text {{ Request::is('projects') ? 'active' : '' }}">Project</a>
                </li>

                <li class="nav-item">
                    <a href="/contact" class="nav-link text {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
