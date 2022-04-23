@extends('home.base')

    @section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Predicateurs</a></li>
                                    <li class="breadcrumb-item active">Liste</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Liste des predicateurs</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-8">
                                        <form class="d-flex flex-wrap align-items-center">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>
                                            <div class="me-3">
                                                <input type="search" class="form-control my-1 my-md-0" id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <label for="status-select" class="me-2">Sort By</label>
                                            <div class="me-sm-3">
                                                <select class="form-select my-1 my-md-0" id="status-select">
                                                    <option selected="">All</option>
                                                    <option value="1">Name</option>
                                                    <option value="2">Post</option>
                                                    <option value="3">Followers</option>
                                                    <option value="4">Followings</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-md-end mt-3 mt-md-0">
                                            <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row -->    

                <div class="row">
                    @foreach($preachers as $preacher): 
                    <div class="col-lg-4">
                        <div class="text-center card">
                            <div class="card-body">
                                <div class="pt-2 pb-2">
                                    <img src="{{ asset($preacher['preacher_image']) }}" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="" class="text-dark">{{ $preacher['preacher_name'] }}</a></h4>

                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="mt-3">
                                                <h4>20</h4>
                                                <p class="mb-0 text-muted text-truncate">Predications</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                    @endforeach
                </div>
                
            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; by <a href="#">The Media Team</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
    @endsection