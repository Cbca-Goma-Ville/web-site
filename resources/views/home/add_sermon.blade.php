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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Predications</a></li>
                                            <li class="breadcrumb-item active">Ajouter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ajouter une prédication</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                {{ Form::open(['method' => 'POST', 'files' => 'true', 'url' => route('home.add_sermon_validation')]) }}
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="sermon_title" class="form-label">Titre</label>
                                                    <input type="text" id="sermon_title" name="sermon_title" class="form-control" placeholder="Theme de la predication" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="sermon_description" class="form-label">Petite description</label>
                                                    <textarea class="form-control" id="sermon_description" name="sermon_description" rows="5" placeholder="Details sur la predication" required></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="sermon_title" class="form-label">Date de la predication</label>
                                                    <input type="date" id="sermon_date" class="form-control" name="sermon_date" placeholder="Theme de la predication" required>
                                                </div>

                                                <div>
                                                    <label for="project-overview" class="form-label">Predicateur</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%" name="author_id" required>
                                                        <option>Select</option>
                                                        @foreach ($preachers as $item)
                                                        <option value="{{ $item['id'] }}">{{ $item['preacher_name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="project-overview" class="form-label">Services & series</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%" name="service_id" required>
                                                        <option>Select</option>
                                                        @foreach ($services as $item)
                                                        <option value="{{ $item['id'] }}">{{ $item['service_name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">

                                                <div class="my-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0 form-label">Couverture </label>
                                                    <p class="text-muted font-14">Fichiers recommandés .jpg .png .jpeg</p>

                                                        <div class="fallback">
                                                            <input name="sermon_cover" type="file" required/>
                                                        </div>

                                                </div>

                                                <div class="my-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0 form-label">Audio</label>
                                                    <p class="text-muted font-14">Fichiers recommandés mp3.</p>

                                                        <div class="fallback">
                                                            <input name="audio_file" type="file" required/>
                                                        </div>

                                                </div>
                                                <div class="my-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0 form-label">PDF</label>
                                                    <p class="text-muted font-14">Fichiers recommandés pdf.</p>

                                                        <div class="fallback">
                                                            <input name="pdf_file" type="file" required/>
                                                        </div>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="sermon_title" class="form-label">Lien de la video</label>
                                                    <input type="text" id="sermon_video_url" name="sermon_video_url" class="form-control" placeholder="https://www.youtube.com/watch?v="/>
                                                </div>
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->


                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <input type="submit" class="btn btn-success waves-effect waves-light m-1" name="add_sermon" value="Ajouter"/>
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
