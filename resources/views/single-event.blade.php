@extends('base')
  @section('title', $event['event_name'].' | '.config('app.name'))
  @section('sermon_img', asset(''.$event['event_cover']) )
  @section('sermon_description', $event['event_description'])
  @section('content')
    <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1>Events</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="{{ route('events-list') }}" class="pull-right btn btn-primary">All events</a> </div>
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
              <nav class="btn-toolbar pull-right"> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Print" ><i class="fa fa-print"></i></a> <a href="mailto:infocbcagomaville@gmail.com" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us" ><i class="fa fa-envelope"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event" ><i class="fa fa-location-arrow"></i></a> </nav>
              <h2 class="post-title">{{ $event['event_name'] }}</h2>
            </header>
            <article class="post-content">
              <div class="event-description"> <img src="{{ $event['event_cover'] }}" class="img-responsive">
                <div class="spacer-20"></div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Détails sur l'événement</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="info-table">
                            <li><i class="fa fa-calendar"></i> Du {{ $event['event_starting_date'] }} | {{ $event['event_starting_time'] }} - {{ $event['event_ending_time'] }}</li>
                            @if($event['event_starting_date'] != $event['event_ending_date'])
                            <li><i class="fa fa-calendar"></i> Au {{ $event['event_ending_date'] }} | {{ $event['event_starting_time'] }} - {{ $event['event_ending_time'] }}</li>
                            @endif
                            <li><i class="fa fa-map-marker"></i> {{ $event['event_adress'] }}</li>
                          <li><i class="fa fa-phone"></i> {{ $event['contact'] }}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="list-group">
                      <li class="list-group-item"> <span class="badge"> - </span> Participants </li>
                      <li class="list-group-item"> <span class="badge"> - </span> Membres du personnel </li>
                    </ul>
                  </div>
                </div>
                <p>{{ $event['event_description'] }}</p>
              </div>
            </article>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Événements à venir</h3>
              </div>
              <ul>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">31</span> <span class="month">dec</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Gospel Night</a></h4>
                    <span class="event-dayntime meta-data">Saturday | 06:00 PM</span> </div>
                </li>
              </ul>
            </div>
            {{-- <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Events Categories</h3>
              </div>
              <ul>
                <li><a href="#">Church Home</a> (9)</li>
                <li><a href="#">About Us</a> (24)</li>
                <li><a href="#">All Events</a> (13)</li>
                <li><a href="#">Sermons Archive</a> (23)</li>
                <li><a href="#">Our Ministries</a> (65)</li>
              </ul>
            </div> --}}
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