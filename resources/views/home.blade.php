@extends('base')

    @section('title','Accueil | '.config('app.name'))
    @section('content')

<!-- Start Hero Slider -->

<div class="slider-wrapper theme-default">

    <div class="nivoslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-effect="random" data-thumbs="no" data-slices="15" data-animSpeed="500" data-pauseTime="3000" data-pauseonhover="yes">

      <img src="images/Slide2.jpg" alt="">

         <img src="images/Slide1.jpg" alt="">

            <img src="images/Slide3.jpg" alt="">

                <img src="images/Slide4.jpg" alt="">

                      {{-- <img src="images/Slide5.jpg" alt=""> --}}

                            <img src="images/Slide6.jpg" alt="">
    </div>

</div>

<!-- End Hero Slider --> 

<!-- Start Notice Bar -->

<div class="notice-bar">

  <div class="container">

    <div class="row">

      <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>ÉVÉNEMENT À VENIR</strong> </div>

      <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">

        <h5><a href="">Celebration Nouvel an</a></h5>

        <span class="meta-data">01 Janvier 2023</span> </div>

      <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="January 1, 2023">

        <div class="timer-col days"> <span id="days"></span> <span class="timer-type">days</span> </div>

        <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>

        <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>

        <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>

      </div>

      <div class="col-md-2 col-sm-6 hidden-xs"> <a href="{{ route('events-list') }}" class="btn btn-primary btn-lg btn-block">Evénements</a> </div>

    </div>

  </div>

</div>

<!-- End Notice Bar --> 

<!-- Start Content -->

<div class="main" role="main">

  <div id="content" class="content full">

    <div class="container">

      <div class="row"> 

        <!-- Start Featured Blocks -->

        <div class="featured-blocks clearfix">

          <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ route('our-staff') }}" class="img-thumbnail"> <img src="images/staff.jpg" alt="staff"> <strong>Leadership</strong> <span class="more">lire plus</span> </a> </div>

          <div class="col-md-4 col-sm-4 featured-block"> <a href="" class="img-thumbnail"> <img src="images/newhere.jpg" alt="staff"> <strong>Temoignages</strong> <span class="more">lire plus</span> </a> </div>

          <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ route('sermons') }}" class="img-thumbnail"> <img src="images/sermons.jpg" alt="staff"> <strong>Archive des Prédications</strong> <span class="more">lire plus</span> </a> </div>

        </div>

        <!-- End Featured Blocks --> 

      </div>

      <div class="row">

        <div class="col-md-8 col-sm-6"> 

          <!-- Events Listing -->

          <div class="listing events-listing">

            <header class="listing-header">

              <h3>Programme de la Semaine</h3>

            </header>

            <section class="listing-cont">

              <ul>

                <li class="item event-item">

                  <div class="event-date"> <span class="date"> </span> <span class="month"> </span> </div>

                  <div class="event-detail">

                    <h4><a href="">Culte Matinal</a></h4>

                    <span class="event-dayntime meta-data">Mardi | 06:00 AM</span> </div>

                  <div class="to-event-url">

                    <div><a href="" class="btn btn-default btn-sm">Details</a></div>

                  </div>

                </li>

                <li class="item event-item">

                  <div class="event-date"> <span class="date"></span> <span class="month"></span> </div>

                  <div class="event-detail">

                    <h4><a href="">Etude Biblique</a></h4>

                    <span class="event-dayntime meta-data">Mercredi | Français 16:00-17:00H | Anglais 17:00-18:00H </span> </div>

                  <div class="to-event-url">

                    <div><a href="" class="btn btn-default btn-sm">Details</a></div>

                  </div>

                </li>

                <li class="item event-item">

                  <div class="event-date"> <span class="date"></span> <span class="month"></span> </div>

                  <div class="event-detail">

                    <h4><a href="">Reunion Staff</a></h4>

                    <span class="event-dayntime meta-data">Samedi | 16:00 PM</span> </div>

                  <div class="to-event-url">

                    <div><a href="" class="btn btn-default btn-sm">Details</a></div>

                  </div>

                </li>

              </ul>

            </section>

          </div>

          <div class="spacer-30"></div>

          <!-- Latest News -->

          <div class="listing post-listing">

            <header class="listing-header">

              <h3>Dernières nouvelles</h3>

            </header>

            <section class="listing-cont">

              <ul>

                <li class="item post">

                  <div class="row">

                    <div class="col-md-4"> <a href="#" class="media-box"> <img src="images/blog-image3.jpg" alt="" class="img-thumbnail"> </a></div>

                    <div class="col-md-8">

                      <div class="post-title">

                        <h2><a href="">LA GENEROSITE SELON DIEU</a></h2>

                        <span class="meta-data"><i class="fa fa-calendar"></i> Le 21 Nov, 2021</span></div>

                      <p>La générosité selon Dieu ne dépend pas de ce qu’on a, mais du coeur; La générosité selon Dieu est un acte de foi; La générosité selon Dieu est la manifestation de la grâce de Dieu;Dieu n’est jamais insensible à un coeur généreux.Marc 12:41-44;2 Corinthiens8:1-5</p>

                    </div>

                  </div>

                </li>

                <li class="item post">

                  <div class="row">

                    <div class="col-md-4"> <a href="" class="media-box"> <img src="images/blog-image2.jpg" alt="" class="img-thumbnail"> </a></div>

                    <div class="col-md-8">

                      <div class="post-title">

                        <h2><a href="">LE COEUR QUI PARDONNE</a></h2>

                        <span class="meta-data"><i class="fa fa-calendar"></i> Le 14 Nov 2021</span></div>

                      <p>Que signifie “pardonner”?;•Renoncer au sentiment de colère ou au désir de punir une personne pour le mal qu’il vous a fait.•Annuler la dette d’une personne.Pourquoi Dieu nous a-t-Il pardonnés?•Il nous aimeet Il veutque nous vivionsavec Luipour toujours.•Nous sommesincapables de payer pour nos péchéset rester vivants.•Il veut nous transformer.</p>

                    </div>

                  </div>

                </li>

              </ul>

            </section>

          </div>

        </div>

        <!-- Start Sidebar -->

        <div class="col-md-4 col-sm-6"> 

          <!-- Latest Sermons -->

          <div class="listing sermons-listing">

            <header class="listing-header">

              <h3>Prédication recente</h3>

            </header>

            @php
            if(!empty($latest_sermon)){
              $url = $latest_sermon['sermon_video_url'];
              if($url != ""){
              $exploded = explode("=",$url);
              $key = $exploded[1];
              }else{
              $key = "";
              }
            }
            @endphp

            <section class="listing-cont">

              <ul>
                @if(!empty($latest_sermon))
                <li class="item sermon featured-sermon"> <span class="date">{{ $latest_sermon['sermon_date'] }}</span>

                  <h4><a href="{{ route('sermon', ['id'=> $latest_sermon['id']]) }}">{{ Str::substr($latest_sermon['sermon_title'], 0, 35) }}...</a></h4>

                  <div class="featured-sermon-video">

                    <iframe width="200" height="150" src="https://www.youtube.com/embed/{{ $key }}"></iframe>

                  </div>

                  <p>{{ Str::substr($latest_sermon['sermon_description'], 0, 90) }}</p>

                  <div class="sermon-actions"> <a href="{{ $latest_sermon['sermon_video_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="sermon/{{ $latest_sermon['sermon_audio_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="{{ $latest_sermon['sermon_file_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="{{ $latest_sermon['sermon_file_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>

                </li>
                @endif

                <li class="item sermon">

                  <h2 class="sermon-title"><a href="">La communion Fraternelle: Quel sens?</a></h2>

                  <span class="meta-data"><i class="fa fa-calendar"></i> Le 14 Novembre 2021</span> </li>

                <li class="item sermon">

                  <h2 class="sermon-title"><a href="">Que signifie aimer?

Dieu. Matthieu 27:34-38</a></h2>

                  <span class="meta-data"><i class="fa fa-calendar"></i> Le 07 Novembre 2021</span> </li>

                <li class="item sermon">

                  <h2 class="sermon-title"><a href="">MOI ET MA MAISON, NOUS SERVIRONS L ETERNEL. Josué 24, 1-15; Marc 10, 13-16; Ephésiens 6, 1-3 </a></h2>

                  <span class="meta-data"><i class="fa fa-calendar"></i> Le 07 Novembre 2021</span> </li>

              </ul>

            </section>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- Start Featured Gallery -->

<div class="featured-gallery">

  <div class="container">

    <div class="row">

      <div class="col-md-3 col-sm-3">

        <h4>GALERIE</h4>

        <a href="#" class="btn btn-default btn-lg">PLUS D IMAGES</a> </div>

      <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img1.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img1.jpg" alt=""> </a> </div>

      <div class="col-md-3 col-sm-3 post format-video"> <a href="http://youtu.be/NEFfnbQlGo8" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img2.jpg" alt=""> </a> </div>

      <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img3.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img3.jpg" alt=""> </a> </div>

    </div>

  </div>

</div>

<!-- End Featured Gallery -->

@endsection