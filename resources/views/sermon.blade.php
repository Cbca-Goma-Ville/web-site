@extends('base')

    @section('title', $sermon['sermon_title'].' | '.config('app.name'))
    @section('sermon_img', asset('sermon/'.$sermon['sermon_cover']) )
    @section('sermon_description', $sermon['sermon_description'])
    @section('content')

    @php
    
        $url = $sermon['sermon_video_url'];
        if($url != ""){
          $exploded = explode("=",$url);
          $key = $exploded[1];
        }else{
          $key = "";
        }
        
    @endphp
        <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('sermons') }}">{{ __('Predications') }}</a></li>
            <li class="active">{{ $sermon['sermon_title'] }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header -->  
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <div class="pull-right sermon-actions"> <a href="{{ $sermon['sermon_video_url'] }}" class="play-video-link" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="{{ asset('sermon/'.$sermon['sermon_audio_url'].'') }}" class="play-audio-link" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="{{ $sermon['sermon_audio_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Download Audio" ><i class="fa fa-download"></i></a> <a href="{{ $sermon['sermon_file_url'] }}" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
              <h2 class="post-title">{{ $sermon['sermon_title'] }}</h2>
            </header>
            <article class="post-content">
              <div class="video-container">
                @if($key != "")
                <!-- Iframe baby -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $key }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- Iframe baby -->
                @else 
                <div class="">
                  <audio class="audio-player" src="{{ asset('sermon/'.$sermon['sermon_audio_url'].'') }}" type="audio/mp3" controls></audio>
                </div>
                @endif
              </div>
              <div class="audio-container">
                <audio class="audio-player" src="{{ asset('sermon/'.$sermon['sermon_audio_url'].'') }}" type="audio/mp3" controls></audio>
              </div>
              <p>{{ $sermon['sermon_description'] }}</p>
              <div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Faith</a>, <a href="#">Heart</a>, <a href="#">Love</a>, <a href="#">Praise</a>, <a href="#">Sin</a>, <a href="#">Soul</a> </div>
            </article>
            <!-- Comments -->
            <section class="post-comments">
              <h3><i class="fa fa-comment"></i>{{ __('Commentaires') }} ({{ count($comments) }})</h3>
              @if(count($comments) != 0)
              <ol class="comments">
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="images/img_avatar.png" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                </li>
              </ol>
              @else 
              <ol class="comments">
                <li>
                  <div class="post-comment-block">
                    <p>Aucun commentaire pour l'instant...</p>
                  </div>
                </li>
              </ol>
              @endif
            </section>
            <!-- Comments -->
            {{-- <section class="post-comment-form">
              <h3><i class="fa fa-share"></i> Post a comment</h3>
              <form>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control input-lg" placeholder="Your name">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control input-lg" placeholder="Your email">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="url" class="form-control input-lg" placeholder="Website (optional)">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <textarea cols="8" rows="4" class="form-control input-lg" placeholder="Your comment"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                    </div>
                  </div>
                </div>
              </form>
            </section> --}}
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
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
                <h3>{{ __('Predicateurs') }}</h3>
              </div>
              <ul>
              @foreach ($preachers as $item)
              <li><a href="{{ route('sermons_by', ['id'=> $item['id']]) }}">{{ $item['preacher_name'] }}</a> ({{ count($item['sermons']) }})</li>
              @endforeach
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Tags</h3>
              </div>
              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection