<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('extra-meta')

    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('extra-script')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-gray-800 antialiased">
    <div id="app">
        <nav class="fixed-top navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="flex items-center">
                        <img src="{{ url('assets/images/logo/logo-orange-sm.png') }}" alt="" class="h-6 mr-2">
                        <span class="font-semibold">{{ config('app.name', 'Laravel') }}</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item">
                            <a class="nav-link" href="{{ route('nos-programmes') }}">{{ __('Nos programmes') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offre-prepa') }}">{{ __('Préparation physique') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offre-club') }}">{{ __('Offre club') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto items-center">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Profil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}">
                                Mon panier
                                <span class="badge bg-orange-500 rounded-full px-2 py-1 text-center object-right-top text-white text-sm">
                                    {{ Cart::count() }}
                                </span>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="mt-12">
            @yield('content')
        </main>


{{--        <footer class="relative bg-gray-300 pt-8 pb-6">--}}
{{--            <div--}}
{{--                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"--}}
{{--                style="height: 80px; transform: translateZ(0px);"--}}
{{--            >--}}
{{--                <svg--}}
{{--                    class="absolute bottom-0 overflow-hidden"--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    preserveAspectRatio="none"--}}
{{--                    version="1.1"--}}
{{--                    viewBox="0 0 2560 100"--}}
{{--                    x="0"--}}
{{--                    y="0"--}}
{{--                >--}}
{{--                    <polygon--}}
{{--                        class="text-gray-300 fill-current"--}}
{{--                        points="2560 0 2560 100 0 100"--}}
{{--                    ></polygon>--}}
{{--                </svg>--}}
{{--            </div>--}}
{{--            <div class="container mx-auto px-4">--}}
{{--                <div class="flex flex-wrap">--}}
{{--                    <div class="w-full lg:w-6/12 px-4">--}}
{{--                        <h4 class="text-3xl font-semibold">Rejoignez la communauté Fitae !</h4>--}}
{{--                        <h5 class="text-lg mt-0 mb-2 text-gray-700">--}}
{{--                            Trouvez nous en un clic sur ces réseaux sociaux, nous répondons à tous vos messages chaque jour.--}}
{{--                        </h5>--}}
{{--                        <div class="mt-6">--}}
{{--                            <button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">--}}
{{--                                <i class="fa fa-instagram"></i>--}}
{{--                            </button>--}}
{{--                            <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">--}}
{{--                                <i class="fa fa-twitter"></i>--}}
{{--                            </button>--}}
{{--                            <button class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">--}}
{{--                                <i class="fa fa-facebook-square"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full lg:w-6/12 px-4">--}}
{{--                        <div class="flex flex-wrap items-top mb-6">--}}
{{--                            <div class="w-full lg:w-5/12 px-4 ml-auto">--}}
{{--                                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Liens utiles</span>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">Préparation physique</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">Offre club</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">Blog</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="w-full lg:w-4/12 px-4">--}}
{{--                                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Autres</span>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"--}}
{{--                                           href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">Licenses MIT</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms">CGU & CGV</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy">Confidentialité</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us">Contactez-nous</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr class="my-6 border-gray-400" />--}}
{{--                <div class="flex flex-wrap items-center md:justify-between justify-center">--}}
{{--                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">--}}
{{--                        <div class="text-sm text-gray-600 font-semibold py-1">--}}
{{--                            Copyright © 2020 by--}}
{{--                            <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Fitae</a--}}
{{--                            >.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
        <footer class="d-flex pb-5 pt-6 pt-md-7 border-top border-light @@classes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p><strong>Fitae</strong> est présent sur les réseaux sociaux. Suivez-nous pour ne manquer aucune actualité!</p>
                        <ul class="d-flex list-unstyled mb-5 mb-lg-0">
                            <li class="mr-2">
                                <a href="https://twitter.com/themesberg" target="_blank" class="btn btn-icon-only btn-pill btn-primary btn-twitter" aria-label="twitter social link"
                                   data-toggle="tooltip" data-placement="top" title="Follow @themesberg on Twitter">
                                    <span aria-hidden="true" class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="https://www.facebook.com/themesberg/" target="_blank" class="btn btn-icon-only btn-pill btn-primary btn-facebook" aria-label="facebook social link"
                                   data-toggle="tooltip" data-placement="top" title="Like @themesberg on Facebook">
                                    <span aria-hidden="true" class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="https://github.com/themesberg" target="_blank" class="btn btn-icon-only btn-pill btn-primary btn-instagram" aria-label="instagram social link"
                                   data-toggle="tooltip" data-placement="top" title="Open source projects">
                                    <span aria-hidden="true" class="fa fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 mb-5 mb-lg-0">
                        <h5>Themesberg</h5>
                        <ul class="footer-links list-unstyled mt-2">
                            <li class="mb-1"><a class="p-2" target="_blank" href="https://themesberg.com/blog">Qui sommes-nous ?</a></li>
                            <li class="mb-1"><a class="p-2" target="_blank" href="https://themesberg.com/products">Préparation physique</a></li>
                            <li class="mb-1"><a class="p-2" target="_blank" href="https://themesberg.com/about">Offre Club</a></li>
                            <li><a class="p-2" target="_blank" href="https://themesberg.com/contact">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                        <h5>S'inscrire à notre newsletter</h5>
                        <p class="text-gray font-small mt-2">Recevez des coupons de réductions et des contenus sportifs gratuitement.</p>
                        <form action="#">
                            <div class="form-row mb-2">
                                <div class="col-12">
                                    <label class="h6 font-weight-normal d-none" for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control mb-2" placeholder="Votre adresse e-mail..." name="email" aria-label="Subscribe form" id="exampleInputEmail3" required>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block" data-loading-text="Sending">
                                        <span>Subscribe</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="text-gray font-small m-0">Nous ne partagerons jamais vos données.<br> Voir notre <a class="text-black" href="#">Politique de confidentialité</a></p>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col">
                        <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                            <img src="{{ url('assets/images/logo/logo-orange-sm.png') }}" height="25" class="mb-3" alt="Themesberg Logo">
                        </a>
                        <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                            <p class="font-weight-normal font-small mb-0">Copyright © Fitæ
                                <span class="current-year">2020</span>. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    @yield('extra-js')
</body>
</html>
