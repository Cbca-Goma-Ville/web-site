@extends('base')
  @section('title','Evenements | '.config('app.name'))
  @section('content')
   <!-- Start Nav Backed Header -->
   <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('Accueil') }}</a></li>
            <li class="active">{{ __('Evenements') }}</li>
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
          <h1>{{ __('Evenements') }}</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="grid-holder col-3 events-grid">
              @foreach($events as $event)
                <li class="grid-item format-standard">
                  <div class="grid-item-inner"> <a href="{{ route('sevent', ['id'=> $event['id']]) }}" class="media-box"> <img src="sevent/{{ $event['event_cover'] }}" alt=""> </a>
                    <div class="grid-content">
                      <h3><a href="{{ route('sevent', ['id'=> $event['id']]) }}">{{ $event['event_name'] }}</a></h3>
                      <p>{{ $event['event_description'] }}</p>
                    </div>
                    <ul class="info-table">
                      <li><i class="fa fa-calendar"></i> Du {{ $event['event_starting_date'] }} | {{ $event['event_starting_time'] }} - {{ $event['event_ending_time'] }}</li>
                      @if($event['event_starting_date'] != $event['event_ending_date'])
                      <li><i class="fa fa-calendar"></i> Au {{ $event['event_ending_date'] }} | {{ $event['event_starting_time'] }} - {{ $event['event_ending_time'] }}</li>
                      @endif
                      <li><i class="fa fa-map-marker"></i> {{ $event['event_adress'] }}</li>
                      
                    </ul>
                  </div>
                </li>
              @endforeach
            </ul>
            {{-- <ul class="pager pull-right">
              <li><a href="#">&larr; Older</a></li>
              <li><a href="#">Newer &rarr;</a></li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection

