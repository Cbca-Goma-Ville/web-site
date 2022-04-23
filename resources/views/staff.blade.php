@extends('base')

    @section('title','Notre Staff | '.config('app.name'))
    @section('content')
        <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Staff</h1>
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
          @if(count($staff) != 0)
           @foreach ($collection as $item)
           <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="{{ asset($item['staff_image']) }}" alt=""> </div>
                <div class="grid-content">
                  <h3>{{ $item['staff_name'] }}</h3>
                  <nav class="social-icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else 
          <p class="text-center">Aucun staff enregistré pour le moment...</p>
          @endif
         
      
        </div>
      </div>
    </div>
  </div>
    @endsection