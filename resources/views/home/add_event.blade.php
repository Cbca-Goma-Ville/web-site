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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Evenements</a></li>
                                            <li class="breadcrumb-item active">Ajouter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ajouter un evenement</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                {{ Form::open(['method' => 'POST', 'files' => 'true', 'url' => route('home.add_event_validation')]) }}
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="event_name" class="form-label">Titre</label>
                                                    <input type="text" id="event_name" name="event_name" class="form-control" placeholder="Titre de l'evenement" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="event_description" class="form-label">Petite description</label>
                                                    <textarea class="form-control" id="event_description" name="event_description" rows="5" placeholder="Descrption sur l'evenement" required></textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="event_starting_date" class="form-label">Date de debut</label>
                                                        <input type="date" id="event_starting_date" class="form-control" name="event_starting_date" placeholder="Date de debut" required>
                                                    </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="event_ending_date" class="form-label">Date de fin</label>
                                                            <input type="date" id="event_ending_date" class="form-control" name="event_ending_date" placeholder="Date de fin" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="event_starting_time" class="form-label">Heure de debut</label>
                                                        <input type="time" id="event_starting_time" class="form-control" name="event_starting_time" placeholder="Date de debut" required>
                                                    </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="event_ending_time" class="form-label">Heure de fin</label>
                                                            <input type="time" id="event_ending_time" class="form-control" name="event_ending_time" placeholder="Date de fin" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-xl-6">

                                                <div class="my-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0 form-label">Adresse/Lieu </label>
                                                    <p class="text-muted font-14">Emplacement de l'evenement</p>

                                                        <div class="fallback">
                                                            <textarea name="event_adress" rows="3" class="form-control" required></textarea>
                                                        </div>

                                                </div>

                                                <div class="mb-3">
                                                    <label for="contact" class="form-label">Numero de contact</label>
                                                    <input type="text" class="form-control" id="contact" name="contact" rows="5" placeholder="Contact" required/>
                                                </div>

                                                <div class="my-3 mt-xl-0">
                                                    <label for="event_cover" class="mb-0 form-label">Image </label>
                                                    <p class="text-muted font-14">Image representant l'evenement Taille : </p>

                                                        <div class="fallback">
                                                            <input name="event_cover" type="file" required/>
                                                        </div>

                                                </div>
                                
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->


                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <input type="submit" class="btn btn-success waves-effect waves-light m-1" name="add_event" value="Ajouter"/>
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