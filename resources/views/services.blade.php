@extends('base')
    @section('title', 'Predications - '.$service['service_name'].' | '.config('app.name'))
    @section('sermon_img', asset($service['service_image']))
    @section('content')

        <!-- Start Nav Backed Header -->

  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('sermons') }}">Predications</a></li>
            <li class="active">Predications - {{ $service['service_name'] }}</li>
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
          <h1>{{ __('Predications') }}</h1>
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

          <div class="col-md-8 sermon-archive">

            <!-- Sermons Listing -->

            @if(count($sermons) != 0)
                  @foreach ($sermons as $sermon)
                  <article class="post sermon">
                    <header class="post-title">
                      <div class="row">
                        <div class="col-md-9 col-sm-9">
                          <h3><a href="{{ route('sermon', ['id'=> $sermon['id'],'title'=> $sermon['sermon_title']]) }}">{{ Str::substr($sermon['sermon_title'], 0, 55) }}...</a></h3>
                          <span class="meta-data"><i class="fa fa-calendar"></i>Publié le {{ $sermon['sermon_date'] }}</span> </div>
                        <div class="col-md-3 col-sm-3 sermon-actions"> <a href="{{ $sermon['sermon_video_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="sermon/{{ $sermon['sermon_audio_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="sermon/{{ $sermon['sermon_file_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Read online" ><i class="fa fa-file-text-o"></i></a> </div>
                      </div>
                    </header>
                    <div class="post-content">
                      <div class="row">
                        <div class="col-md-4"> <a href="{{ route('sermon', ['id'=> $sermon['id']]) }}" class="media-box"> <img src="{{ asset('sermon/'.$sermon['sermon_cover'].'') }}" alt="" class="img-thumbnail"> </a> </div>
                        <div class="col-md-8">
                          <p>{{ $sermon['sermon_description'] }}</p>
                          <p><a href="{{ route('sermon', ['id'=> $sermon['id']]) }}" class="btn btn-primary">Continuer la lecture <i class="fa fa-long-arrow-right"></i></a></p>
                        </div>
                      </div>
                    </div>
                  </article>
                  @endforeach
                  {{ $sermons->links('pagination::default') }}
            @else
            <p>Aucune Predications enregistrées actuellement</p>
            @endif

          </div>

          <!-- Start Sidebar -->

          <div class="col-md-4 sidebar">

            <div class="widget sidebar-widget">

                <div class="sidebar-widget-title">
                    <h3>Services & Series</h3>
                </div>
                <ul>
                @foreach ($services as $item)
                <li><a href="{{ route('services', ['id'=> $item['id']]) }}">{{ $item['service_name'] }}</a> ({{ count($item['sermons']) }})</li>
                @endforeach
                </ul>

            </div>

            <div class="widget sidebar-widget">

              <div class="sidebar-widget-title">

                <h3>Predicateurs</h3>

              </div>

              <ul>
              @foreach ($preachers as $item)
                  <li><a href="{{ route('sermons_by', ['id'=> $item['id']]) }}">{{ $item['preacher_name'] }}</a> ({{ count($item['sermons']) }})</li>
              @endforeach
              </ul>

            </div>

            <div class="widget sidebar-widget">

              <div class="sidebar-widget-title">

                <h3>Tags des sermons</h3>

              </div>

              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

    @endsection