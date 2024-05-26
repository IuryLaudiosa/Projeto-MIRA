<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="/css/homePageStyle.css">
    <link rel="stylesheet" href="/css/forumStyle.css">

    <!-- Link Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <title>MIRA</title>
</head>

<body>
    <div id="container-nav">
        <header class="bg-green text-black text-center background-green">
            <nav class="navbar navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <a href="/">
                        <img src="img/logo.png" alt="Logo" id="logo">
                    </a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Área do aluno</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Contato</a></li>
                        <li class="nav-item"><a href="#sobre-nos" class="nav-link">Sobre nós</a></li>
                        <li class="nav-item"><a href="/forum" class="nav-link">Forum</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div class="container">
     @yield('content')
    </div>
    <div class="container">
        <footer class="py-3 my-4" id="sobre-nos">
            <div class="me-5 d-lg-block">
                <ul class="nav justify-content-center border-bottom">
                    <li class="nav-item">
                        <a href="https://www.instagram.com/maria_ilydia_resende?igsh=Z2pnd3dpeG9ycjhn" class="px-2" target="_blank">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://api.whatsapp.com/send?phone=553288472495" class="px-2" target="_blank">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/p/EE-Maria-Ilydia-Resende-Andrade-100054259580162/?locale=pt_BR" class="px-2" target="_blank">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <p class="text-center text-muted background-green" id="footer-id">© 2024 - E.E Maria Ilydia Resende Andrade</p>

    <!-- Script Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Icones -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>