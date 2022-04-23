<!DOCTYPE HTML>

<html class="no-js"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- Basic Page Needs

  ================================================== -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>@yield('title', env('APP_NAME'))</title>

{{-- <meta name="og:description" content="Une paroisse en bonne santé pour la transformation de la societé"> --}}
<meta property="og:type" content="website">
<meta property="og:title" content="@yield('title', env('APP_NAME'))">
<meta name="og:description" content="@yield('sermon_description', 'Une paroisse en bonne santé pour la transformation de la societé' )">
<meta property="og:image" content="@yield('sermon_img', asset('images/cbca-icon.jpg') )">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <meta property="image" content="{{  asset('images/cbca-icon.jpg') }}"> --}}

<meta name="keywords" content="">

<meta name="author" content="Media Team">

<!-- Mobile Specific Metas

  ================================================== -->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">

<!-- CSS

  ================================================== -->

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('plugins/mediaelement/mediaelementplayer.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">

<!-- Nivo Slider Styles -->

<link rel="stylesheet" href="{{ asset('plugins/nivoslider/themes/default/default.css') }}" type="text/css" media="screen" />

<link rel="stylesheet" href="{{ asset('plugins/nivoslider/nivo-slider.css') }}" type="text/css" media="screen" />

<!-- Color Style -->

<link class="alt" href="{{ asset('colors/color1.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('style-switcher/css/style-switcher.css') }}" rel="stylesheet" type="text/css">

<style>
  .notice-bar, .featured-block strong{
    background-color: crimson;
  }

  .notice-bar-title, .notice-bar-title strong{
    color: white;
  }

  .notice-bar-title strong{
    padding-top: 5px;
  }

  .notice-bar-event-title span, .notice-bar-event-title h5 a, .timer-type{
    color: white;
  }

  .parallax{
    background-color: crimson;
  }

  .title-note{
    background-color: white;
    color: crimson;
  }

  .page-header{
    background-color: crimson;
  }

  .btn-primary{
    background-color: crimson;
  }

  .featured-gallery{
    background-color: crimson;
  }

  .event-detail h4 a{
    color: crimson;
  }

  #days{
    background-color: #eceae4;
    color: #666666; 
  }

  .text-primary, .btn-primary .badge, .btn-link, a.list-group-item.active > .badge, .nav-pills > .active > a > .badge, p.drop-caps:first-child:first-letter, .accent-color, .events-listing .event-detail h4 a, .featured-sermon h4 a, .page-header h1, .post-more, ul.nav-list-primary > li a:hover, .widget_recent_comments a, .navigation .megamenu-container .megamenu-sub-title, .cause-item .progress-label, .payment-to-cause a, .products-list li .product-price, .products-list li .product-details h3 a:hover{
    color: crimson;
  }

  .text-primary, .btn-primary .badge, .btn-link, a.list-group-item.active > .badge, .nav-pills > .active > a > .badge, p.drop-caps:first-child:first-letter, .accent-color, .events-listing .event-detail h4 a, .featured-sermon h4 a, .page-header h1, .post-more, ul.nav-list-primary > li a:hover, .widget_recent_comments a, .navigation .megamenu-container .megamenu-sub-title, .cause-item .progress-label, .payment-to-cause a, .products-list li .product-price, .products-list li .product-details h3 a:hover{
    color: crimson;
  }

  p.drop-caps.secondary:first-child:first-letter, .accent-bg, .fa.accent-color, .btn-primary, .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active, .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, .label-primary, .progress-bar, a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus, .panel-primary > .panel-heading, .carousel-indicators .active, .owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span, hr.sm, .flex-control-nav a:hover, .flex-control-nav a.flex-active, .title-note, .timer-col #days, .featured-block strong, .featured-gallery, .nav-backed-header, .next-prev-nav a, .event-description .panel-heading, .media-box .media-box-wrapper, .staff-item .social-icons a, .accordion-heading .accordion-toggle.active, .accordion-heading:hover .accordion-toggle, .accordion-heading:hover .accordion-toggle.inactive, .nav-tabs li a:hover, .nav-tabs li a:active, .nav-tabs li.active a, .fc-event, .timeline > li > .timeline-badge, .header-style3 .toprow, .featured-star, .featured-event-time, .goingon-events-floater-inner, .products-list .product-image .add-to-cart{
    background-color: crimson;
    color: white;
  }
</style>

<!-- SCRIPTS

  ================================================== -->

<script src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizr -->

</head>

<body>

<div class="body"> 

  <!-- Start Site Header -->

  <header class="site-header">

    <div class="topbar">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-sm-6 col-xs-8">

            <h1 class="logo"> <a href=""><img src="{{ asset('images/logo.png') }}" alt="CBCA Goma-Ville"></a> </h1>

          </div>

          <div class="col-md-8 col-sm-6 col-xs-4">

            <ul class="top-navigation hidden-sm hidden-xs">

              <li><a href="https://web.facebook.com/cbcagomaville/?_rdc=1&_rdr" target="_blank">Suivre en Direct</a></li>

              <li><a href="">Programme</a></li>

              <li><a href="">Contact +243 995 487 798</a></li>

            </ul>

            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>

        </div>

      </div>

    </div>

    <div class="main-menu-wrapper">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <nav class="navigation">

              <ul class="sf-menu">

                <li><a href="{{ route('home') }}">{{ __('Accueil') }}</a></li>

                <li><a href="{{ route('about') }}">{{ __('A propos') }}</a>

                  <ul class="dropdown">

                    <li><a href="{{ route('about') }}">{{ __('Aperçu') }}</a></li>

                    <li><a href="{{ route('location') }}">{{ __('Où nous nous rencontrons') }}</a></li>

                    <li><a href="{{ route('our-staff') }}">{{ __('Notre Staff') }}</a></li>

                  </ul>

                </li>

                <li class="megamenu"><a href="">Ministères</a>

                  <ul class="dropdown">

                    <li>

                      <div class="megamenu-container container">

                        <div class="row">

                          <div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class="fa fa-bell"></i> Prière du jour</span>

                            <iframe width="200" height="150" src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>

                          </div>

                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-pagelines"></i> NOS MINISTERES</span>

                            <ul class="sub-menu">

                              <li><a href="">PASTORAL</a></li>

                              <li><a href="">CONSISTOIRE</a></li>

                              <li><a href="">MJC</a></li>

                              <li><a href="">CHORALE</a></li>

                              <li><a href="">EVANGELISATION</a></li>

                            </ul>

                          </div>

                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-clock-o"></i> EVENEMENTS AVENIR</span>

                            <ul class="sub-menu">

                              <li><a href="">Culte des mamans</a> <span class="meta-data">Mardi | 06:00 AM</span> </li>

                              <li><a href="">Etudes Biblique</a> <span class="meta-data">Mercredi | 16:00 -18:00 PM</span> </li>

                              <li><a href="">Réunion Staff</a> <span class="meta-data">Samedi| 16:00 PM</span> </li>

                            </ul>

                          </div>

                        </div>

                      </div>

                    </li>

                  </ul>

                </li>
                 <li><a href="">Actualités</a>
                  <li><a href="{{ route('sermons') }}">Prédications</a></li>


                <li><a href="{{ route('events-list') }}">Événements</a>

                  <ul class="dropdown">

                    <li><a href="{{ route('events-list') }}">Liste</a></li>

                </li>

                    <li><a href="{{ route('this-week') }}">Cette semaine</a></li>

                  </ul>

                </li>

              	</li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

    </div>

  </header>

  <!-- End Site Header --> 

  

  @yield('content')



  <!-- Start Footer -->

  <footer class="site-footer">

    <div class="container">

      <div class="row"> 

        <!-- Start Footer Widgets -->

        <div class="col-md-4 col-sm-4 widget footer-widget">

          <h4 class="footer-widget-title">Apropos de nous</h4>

          <img src="{{ asset('images/logo.png') }}" alt="CBCA GomaVille">

          <div class="spacer-20"></div>

          <p>CBCA Goma Ville est l’une de 414 paroisses de la Communauté Baptiste au Centre de l’Afrique. Elle est une paroisse bilingue; francophone et anglophone. Une église en bonne santé pour la transformation de la société.</p>

        </div>

        <div class="col-md-4 col-sm-4 widget footer-widget">

          <h4 class="footer-widget-title">Raccourcis</h4>

          <ul>

            <li><a href="{{ route('home') }}">Accueil</a></li>

            <li><a href="{{ route('about') }}">Apropos</a></li>

            <li><a href="{{ route('events-list') }}">Evenements</a></li>

            <li><a href="{{ route('sermons') }}">Prédications</a></li>

            <li><a href="">Actualités</a></li>

          </ul>

        </div>

        <div class="col-md-4 col-sm-4 widget footer-widget">

          <h4 class="footer-widget-title">Retrouvez-nous sur Facebook, CBCA Goma-Ville</h4>

          <ul class="twitter-widget">

          </ul>

        </div>

      </div>

    </div>

  </footer>

  <footer class="site-footer-bottom">

    <div class="container">

      <div class="row">

        <div class="copyrights-col-left col-md-6 col-sm-6">

          <p>&copy; 2021 CBCA Goma Ville. Tous droits Reservés</p>

        </div>

        <div class="copyrights-col-right col-md-6 col-sm-6">

          <div class="social-icons"> <a href="https://web.facebook.com/cbcagomaville/?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a> <a href="https://www.youtube.com/channel/UCz7pTF-plcSKaoU9BV-T1Fg"><i class="fa fa-rss"></i></a> </div>

        </div>

      </div>

    </div>

  </footer>

  <!-- End Footer --> 

  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 

</div>

<script src="{{ asset('js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call --> 

<script src="{{ asset('plugins/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin --> 

<script src="{{ asset('js/helper-plugins.js') }}"></script> <!-- Plugins --> 

<script src="{{ asset('js/bootstrap.js') }}"></script> <!-- UI --> 

<script src="{{ asset('js/waypoints.js') }}"></script> <!-- Waypoints --> 

<script src="{{ asset('plugins/mediaelement/mediaelement-and-player.min.js') }}"></script> <!-- MediaElements --> 

<script src="{{ asset('plugins/nivoslider/jquery.nivo.slider.js') }}"></script> <!-- NivoSlider -->

<script src="{{ asset('js/init.js') }}"></script> <!-- All Scripts --> 

<script src="{{ asset('plugins/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider --> 

<script src="{{ asset('plugins/countdown/js/jquery.countdown.min.js') }}"></script> <!-- Jquery Timer --> 

<script src="{{ asset('style-switcher/js/jquery_cookie.js') }}"></script> 

<script src="{{ asset('style-switcher/js/script.js') }}"></script> 

</body>

</html>