@extends('base')

    @section('title','Gallerie | '.config('app.name'))
    @section('content')
        <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Notre Gallerie</h1>
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
            <div class="row">
                <div class="col-md-12">
                  <ul class="grid-holder col-3 events-grid isotope" style="position: relative; overflow: hidden; height: 879.25px;">
                    @if(count($albums) != 0)
                    @foreach ($albums as $item)
                    <li class="grid-item post format-link isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(346px, 209px);">
                        <div class="grid-item-inner"> {{ $item['embed_code'] }} </div>
                    </li>
                    @endforeach
                    @endif
                  </ul>

                  <!-- Pagination -->
                  <ul class="pager pull-right">
                    <li><a href="#">← Older</a></li>
                    <li><a href="#">Newer →</a></li>
                  </ul>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection
