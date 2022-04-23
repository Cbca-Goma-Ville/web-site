@extends('base')
    @section('content')
         <!-- Start Nav Backed Header -->
        <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Albums</li>
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
                <h1>Sermon Albums</h1>
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
                <div class="col-md-9 posts-archive">
                    <div class="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <a href="sermons.html" class="album-cover">
                                <span class="album-image"><img src="images/event-img1.jpg" alt=""></span>
                            </a>
                                <div class="label label-default album-count">16 videos</div>
                                <div class="label label-default album-count">6 audios</div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                        <h3><a href="sermons.html">Prayers Collection</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p><a href="#" class="btn btn-primary">Play <i class="fa fa-play"></i></a></p>
                        </div>
                    </div>
                    </div>
                    
                    <div class="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <a href="sermons.html" class="album-cover">
                                <span class="album-image"><img src="images/gallery-img7.jpg" alt=""></span>
                            </a>
                                <div class="label label-default album-count">16 videos</div>
                                <div class="label label-default album-count">6 audios</div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                        <h3><a href="sermons.html">Prayers Collection</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p><a href="#" class="btn btn-primary">Play <i class="fa fa-play"></i></a></p>
                        </div>
                    </div>
                    </div>
                    
                    <div class="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <a href="sermons.html" class="album-cover">
                                <span class="album-image"><img src="images/gallery-img6.jpg" alt=""></span>
                            </a>
                                <div class="label label-default album-count">16 videos</div>
                                <div class="label label-default album-count">6 audios</div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                        <h3><a href="sermons.html">Prayers Collection</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p><a href="#" class="btn btn-primary">Play <i class="fa fa-play"></i></a></p>
                        </div>
                    </div>
                    </div>
                    <ul class="pagination">
                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-3 sidebar">
                    <div class="widget sidebar-widget">
                    <div class="sidebar-widget-title">
                        <h3>Sermon Categories</h3>
                    </div>
                    <ul>
                        <li><a href="#">Faith</a> (10)</li>
                        <li><a href="#">Missions</a> (12)</li>
                        <li><a href="#">Salvation</a> (34)</li>
                        <li><a href="#">Worship</a> (14)</li>
                    </ul>
                    </div>
                    <div class="widget sidebar-widget">
                    <div class="sidebar-widget-title">
                        <h3>Sermon Speakers</h3>
                    </div>
                    <ul>
                        <li><a href="#">John Doe</a> (5)</li>
                        <li><a href="#">Mandra Patrick</a> (13)</li>
                        <li><a href="#">Sophie Chandol</a> (34)</li>
                        <li><a href="#">John Doe</a> (2)</li>
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