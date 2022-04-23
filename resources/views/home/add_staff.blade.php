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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Staff</a></li>
                                            <li class="breadcrumb-item active">Ajouter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ajouter Staff</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                {{ Form::open(['method' => 'POST', 'files' => 'true', 'url' => route('home.add_staff_validation')]) }}
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="staff_name" class="form-label">Nom</label>
                                                    <input type="text" id="staff_name" name="staff_name" class="form-control" placeholder="Nom du membre" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Petite Biographie</label> <br/>
                                                    <textarea class="form-control" name="staff_bio" ></textarea>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="my-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0 form-label">Photo</label>
                                                    <p class="text-muted font-14">Fichiers recommandés .png .jpg .jpeg</p>

                                                        <div class="fallback">
                                                            <input name="staff_image" type="file" required/>
                                                        </div>

                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Etat</label> <br/>
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input" id="customSwitch1" name="status">
                                                        <label class="form-check-label" for="customSwitch1">Basculer cet interrupteur pour activer ce membre du Staff</label>
                                                    </div>
                                                </div>
                                                
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                        <!-- row -->
                                        <div class="row">
                                            <h5>Lien sociaux</h5>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="staff_facebook" class="form-label">Facebook</label>
                                                    <input type="text" id="staff_facebook" name="staff_facebook" class="form-control" placeholder="https://www.facebook.com/cbcagomaville" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Instagram</label> <br/>
                                                    <input type="text" class="form-control" name="staff_instagram" placeholder="https://www.instagram.com/cbcagomaville/"/>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="staff_twitter" class="form-label">Twitter</label>
                                                    <input type="text" id="staff_twitter" name="staff_twitter" class="form-control" placeholder="https://www.facebook.com/cbcagomaville" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="staff_zungvi">Zungvi</label> <br/>
                                                    <input type="text" class="form-control" name="staff_zungvi" placeholder="https://www.zungvi.com/cbcagomaville/"/>
                                                </div> 
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->


                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <input type="submit" class="btn btn-success waves-effect waves-light m-1" name="add_staff" value="Ajouter"/>
                                                <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Annuler</button>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </form>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; by <a href="#">Media Team</a> 
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