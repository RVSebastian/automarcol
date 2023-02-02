<?php include'./dashboard/includes/cn.php';?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // inicimoas la session nuevamente
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

p {
    font-size: 13px !important;
    text-align: justify !important;
}

.bg-dark {
    background-color: #2c3b6d !important;
}

.bg-gray {
    background-color: #eeeeee;
}

.bg-white {
    background-color: #FFFFFF !important;
}

.bg-nuevos {
    background-image: url("./image/usados.jpg");
}

.btn-dark {
    background-color: var(--main) !important;
    margin: 5px !important;
    color: white;
    border: 0 !important;
}

.btn-dark:hover {
    background-color: #17202A !important;
    color: white;
    border: 0;
}

.body {
    overflow: hidden !important;
}

.logo2 {
    max-width: 25rem;
    margin-left: 5vh;
}

.swal-button--catch {
    background-color: var(--main);
}

#btn-lock {
    background-color: #273746 !important;
    border: 0;
}

.loader {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1021;
}


@keyframes vanish {
    0% {
        opacity: 1;
    }

    50% {
        opacity: 1;
    }

    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.disppear {
    animation: vanish 1s ease-in-out forwards;
}

.navbar .a {
    margin: 20px;
}

.navbar-toggler {
    border: 0 !important;

}

.shadow {
    box-shadow: 0 4px 80px rgb(38 25 88 / 10%) !important;
}

.text-justify {
    text-align: justify !important;
}

.accordion-collapse {
    transition: height 1s ease;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./includes/css/global.css" />
    <title>AUTOMARCOL</title>
    <link rel="icon" href="logo.jpeg" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    ScrollReveal().destroy();
    </script>
    <!--
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '349777653590610');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=349777653590610&ev=PageView&noscript=1" /></noscript>
   -->
</head>

<body class="bg-gray">
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg pt-0 mt-0"
        style="  background-color: #2c3b6d !important;" id="nav">
        <div class="container-lg p-4 pb-2 pt-0 ">
            <a class="navbar-brand fs-1 text-white mb-2 p-4" href="./index"><img src="./image/logo.png"
                    style="width: 27rem" alt=""></a>
            <button class="navbar-toggler border-0 fs-1" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bx-bx-child"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav gy-4 fs-2 ml-2 p-4">
                    <li class="nav-item m-sm-2">
                        <a class="nav-link text-white" href="./index#home" class="fs-2">Home</a>
                    </li>
                    <li class="nav-item m-sm-2">
                        <div class="dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Vehiculos
                            </a>

                            <ul class="dropdown-menu fs-2 bg-dark border-0  rounded" style="transition-delay: 4s;">
                                <li><a class="dropdown-item bg-dark text-white" href="./listado?marca=Ford">Catalogo
                                        Ford</a></li>
                                <li><a class="dropdown-item bg-dark text-white" href="./listado?marca=Peugeot">Catalogo
                                        Peugeot</a>
                                </li>
                                <li><a class="dropdown-item bg-dark text-white" href="./listado?marca=Bajaj">Catalogo
                                        Bajaj</a></li>
                                <li><a class="dropdown-item bg-dark text-white" href="./listado?marca=Fca">Catalogo
                                        Fca</a></li>
                                <li><a class="dropdown-item bg-dark text-white" href="./listado?marca=Foton">Catalogo
                                        Foton</a></li>
                                <li><a class="dropdown-item bg-dark text-white" href="./listado?marca=Usados">Catalogo
                                        Usados</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-sm-2">
                        <a class="nav-link text-white" href="./index#repuestos" class="fs-2">Repuestos</a>
                    </li>
                    <li class="nav-item m-sm-2">
                        <div class="dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Citas
                            </a>

                            <ul class="dropdown-menu fs-2 bg-dark border-0  rounded">
                                <li><a class="dropdown-item bg-dark text-white" href="./citas">Citas Taller</a></li>
                                <li><a class="dropdown-item bg-dark text-white" href="./testdrive">Test Drive</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-sm-2">
                        <a class="nav-link text-white" href="./pqrs" class="fs-2">PQRS</a>
                    </li>
                    <li class="nav-item m-sm-2">
                        <a class="nav-link text-white" href="./index#contact" class="fs-2">Contact</a>
                    </li>
                    <!--
                        EN DESARROLLO
                    <li class="nav-item m-sm-2">
                        <a class="nav-link text-white" href="./carrito" class="fs-1 fw-bold carrito bx-tada">Carrito</a>
                    </li>
                    -->
                </ul>
            </div>
        </div>

    </nav>


    <div class="loader">
        <img src="./image/loader2.gif" alt="">
    </div>


    <style>

    </style>
    <script type="text/javascript">
    var nav = document.querySelector('#nav');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            nav.classList.add('shadow-lg');
        } else {
            nav.classList.remove('shadow-lg');
        }
    });
    </script>

    <?php include'./includes/components/whatsapp.php';?>