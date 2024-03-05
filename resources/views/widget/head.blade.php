<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Fondation Himalaya | Cameroun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            {{-- <a class="navbar-brand" href="/">Fon. Himalaya</a> --}}
            <img class="navbar-brand" src="{{ asset('images/logo/logo.png') }}" alt="Logo Fondation Himalaya"
                srcset="" style="width: 6%">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Nos Evènements</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Actualités</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fondation Himalaya
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">A propos de nous</a></li>
                            <li><a class="dropdown-item" href="#">Nos Causes</a></li>
                            <li><a class="dropdown-item" href="#">Notre Galerie</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Nos Donateurs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="containe">
        @yield('content')
    </div>


    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Fondation Himalaya</h2>
                        <p>Fondation humanitaire à but non lucratif, pour de l'espoir à ceux qui en ont le plus besoin.
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            {{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> --}}
                            <li class="ftco-animate"><a
                                    href="https://www.facebook.com/profile.php?id=100093508467975"><span
                                        class="icon-facebook"></span></a></li>
                            {{-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recentes Actualités</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a href="https://www.facebook.com/photo/?fbid=262624460197834&set=a.118475144612767&__cft__[0]=AZU-6vJni96nI73ksYtT_878cmI_EOkNFdpjXhzTGIvCOUGJQdMoLsYRV9TOETWBLNQgPBIBMZYy_7X3zgDekS7TWCptG91pzbFOtigk1yO6nUY5lr_7Lq_EwtVbmSZk3gdiq9NprM5nz6EEn47vKfFmu1ZUOLVGwe7ZnIvOcgQN6YvNlYvHr_SUCIa8WuZjL6g&__tn__=EH-R"
                                class="blog-img mr-4"
                                style="background-image: url(https://scontent-lhr8-1.xx.fbcdn.net/v/t39.30808-6/425000476_262624456864501_3443625227739286344_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHjJaD7D3Ku5JjmYsfMZISUmvScSk5ZNK-a9JxKTlk0ryNoilSre72QIO2I4e8JvE0AAXjUXNUBHCuk5eMqWDN5&_nc_ohc=AXr0vif1UwMAX-Euwgy&_nc_ht=scontent-lhr8-1.xx&oh=00_AfBscffFvBa2fFO-1Emq0pkGie25pI6RtxudGAjV6MotYw&oe=65EC655F);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">SPECIALE COLECTE DE DONS DE VÊTEMENTS
                                        POUR LES ORPHELINS DE LA RÉGION DE L'ESTt</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Fev 10-17, 2024</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a href="https://www.facebook.com/photo/?fbid=205816835878597&set=a.118475144612767&__cft__[0]=AZXe6Spv-y0XTi5cDhZtNmzF3zlOWuHHp4OUKQEsiWO4OsLNTr1H6dmTiqsKuwBoWf1BYX1EK7ZfwUly8TPXSKjmSWElXTGOX4Csedeo7rdRh0jmpFRufQ2sO3oox6hDVM1pG6I8z9aW4vFnxsjyPYmXMEqhwpe7Vue-8thSS1HiCGX0RGxjt9agC1KiIs53Ges&__tn__=EH-R" class="blog-img mr-4"
                                style="background-image: url('https://scontent-lhr6-2.xx.fbcdn.net/v/t39.30808-6/398839363_205816832545264_3061394572295286749_n.jpg?stp=dst-jpg_s600x600&_nc_cat=100&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeEHNk_cL8Wj2KjL93I6n5dbyQhzdEeTdILJCHN0R5N0ggjBPcDMCZJbv7yBritAm460X2fHatJZXHWElTuFJJHK&_nc_ohc=zM1C4aTkjAUAX9u80Ao&_nc_ht=scontent-lhr6-2.xx&oh=00_AfA3y6kTH1OvTVbjU_vAfIcBQ8d2r8UBwt6ef1ggVgziCw&oe=65EC17CF');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Journée commomérative des Défunts
                                        avec les veuves de la ville de Yaoundé</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Nov 02, 2023</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Site Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Accueil</a></li>
                            <li><a href="#" class="py-2 d-block">A Propos de nous</a></li>
                            <li><a href="#" class="py-2 d-block">Nos Causes</a></li>
                            <li><a href="#" class="py-2 d-block">Actualités</a></li>
                            <li><a href="#" class="py-2 d-block">Nos Evènements</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Voulez vous nous soutenir ?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Anguissa, Yaoundé -
                                        Cameroun</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+237
                                            6 95 22 47 09</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">contacts@himalaye.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div> --}}
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
