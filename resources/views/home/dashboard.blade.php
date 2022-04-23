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
                                            <li class="breadcrumb-item active">Liste</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Predications</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="{{ route('home.add_sermon') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Ajouter une predication</a>
                                            </div>
                                            <div class="col-sm-8">
                                                {{-- <div class="text-sm-end">
                                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div> --}}
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Titre</th>
                                                        <th>Auteur</th>
                                                        <th>Lien audio</th>
                                                        <th>Lien pdf</th>
                                                        <th>Lien video</th>
                                                        <th>Date</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sermons as $key=>$item)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">{{ $key }}</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">{{ $item['sermon_title'] }}</a>
                                                        </td>
                                                        <td>{{ $item['author_id'] }}</td>
                                                        <td>
                                                            {{ $item['sermon_audio_url'] }}
                                                        </td>
                                                        <td>
                                                            {{ $item['sermon_file_url'] }}
                                                        </td>
                                                        <td>
                                                           {{ $item['sermon_video_url'] }}
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">{{ $item['sermon_date'] }}</span>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr> 
                                                    @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->

                <!-- Add sermon modal -->

                <!-- Add sermon modal -->
    @endsection