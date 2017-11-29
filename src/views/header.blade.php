<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/blog') }}">Cloudware Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Página principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog/about') }}">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog/contact') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog/admin/posts') }}">Acceso</a>
                </li>
            </ul>
        </div>
    </div>
</nav>