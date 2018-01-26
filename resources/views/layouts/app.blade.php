<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title','Mundial 2018')</title>

    <!-- CSS Files -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110007461-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110007461-2');
    </script>

</head>

<body class="@yield('body-class')">
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                        <img src="{{ asset('images/2018.png') }}" alt="logo" />
                    </div>
                    <div class="d-none d-lg-block col-lg-7 col-xl-7 header_slogan">
                        <img src="{{ asset('images/header.es.png') }}" alt="slogan" />
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 header_artwork">
                        <div class="text-right">
                            <img src="{{ asset('images/artwork.png') }}" alt="artwork" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
    	       @yield('content')
            </div>

            <hr />

            <footer>
                <div class="row">

                    <div class="col-4">
                        <h5>Tecnologías usadas:</h5>

                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <img src="{{ asset('images/laravel.png') }}" alt="laravel" />
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <img src="{{ asset('images/vue.jpg') }}" alt="vuejs" />
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                                <img src="{{ asset('images/boot.png') }}" alt="bootstrap" />
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <br />
                        <p>Proyecto desarrollado por <a href="https://vcard.gonzalesc.org" target="_blank">Alex Gonzáles</a></p>
                        <p>Ver más proyectos en : <a href="https://www.letsgodev.com" target="_blank">Let\'s Go! Developers</a></p>
                    </div>
                    <div class="col-3">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Fixture Mundial 2018 - Footer -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:320px;height:100px"
                             data-ad-client="ca-pub-4622287947957408"
                             data-ad-slot="6906834102">
                        </ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.4/lodash.min.js"></script-->
</body>
</html>