@extends('base')

    @section('title','Nos contacts | '.config('app.name'))

    @section('content')

        <!-- Start Nav Backed Header -->

        <div class="nav-backed-header parallax">

            <div class="container">

            <div class="row">

                <div class="col-md-12">

                <ol class="breadcrumb">

                    <li><a href="{{ route('home') }}">{{ __('Accueil') }}</a></li>

                    <li class="active">{{ __('Adresse') }}</li>

                </ol>

                </div>

            </div>

            </div>

        </div>

        <!-- End Nav Backed Header --> 

        <!-- Start Page Header -->

        <div class="page-header">

            <div class="container">

            <div class="row">

                <div class="col-md-12">

                <h1>Contact</h1>

                </div>

            </div>

            </div>

        </div>

        <!-- End Page Header --> 

        <!-- Start Content -->

        <div class="main" role="main">

            <div id="content" class="content full">

            <div class="container">

                <div class="row">

                <div class="col-md-9">

                    <header class="single-post-header clearfix">

                    <h2 class="post-title">{{ __('Notre adresse') }}</h2>

                    </header>

                    <div class="post-content">

                    <div id="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63809.795367547165!2d29.2092814!3d-1.6756374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a0f6d8ea61d977a!2sCBCA%20Francophone%20Goma-Ville!5e0!3m2!1sfr!2scd!4v1637433689027!5m2!1sfr!2scd"></iframe>
                    </div>

                    <div class="row">

                        <form method="post" id="contactform" name="contactform" class="contact-form" action="https://demo1.imithemes.com/html/nativechurch/mail/contact.php">

                        <div class="col-md-6 margin-15">

                            <div class="form-group">

                            <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">

                            </div>

                            <div class="form-group">

                            <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">

                            </div>

                            <div class="form-group">

                            <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                            <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">

                        </div>

                        </form>

                        <div class="clearfix"></div>

                        <div class="col-md-12">

                        <div id="message"></div>

                        </div>

                    </div>

                    </div>

                </div>

                <!-- Start Sidebar -->

                <div class="col-md-3 sidebar"> 

                    <!-- Recent Posts Widget -->

                    <div class="widget-recent-posts widget">

                    <div class="sidebar-widget-title">

                        <h3>Recent Posts</h3>

                    </div>

                    <ul>

                        <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/blog-image3.jpg" alt="" class="img-thumbnail"> </a>

                        <div class="widget-blog-content"><a href="#">LA GENEROSITE SELON DIEU</a> <span class="meta-data"><i class="fa fa-calendar"></i> Le 21 Nov, 2021</span> </div>

                        </li>

                        <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/blog-image1.jpg" alt="" class="img-thumbnail"> </a>

                        <div class="widget-blog-content"><a href="#">LE COEUR QUI PARDONNE</a> <span class="meta-data"><i class="fa fa-calendar"></i> Le 14 Nov, 2021</span> </div>

                        </li>

                    </ul>

                    </div>

                </div>

                </div>

            </div>

            </div>

        </div>  

    @endsection