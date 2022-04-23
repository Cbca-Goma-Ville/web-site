@extends('auth.base')
    @section('content')
<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">
                            
                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <a href="index.html" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/login/images/logo-dark.png') }}" alt="" height="22">
                                        </span>
                                    </a>
                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/login/images/logo-light.png') }}" alt="" height="22">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                            </div>

                            {{ Form::open(['method'=>'POST']) }}
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                {{ Form::email('email', Request::get('email'), ['required' => 'required','class' => 'form-control' ,'placeholder' => 'Enter your email']) }}
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    {{ Form::password('password', ['required' => 'required', 'class' => 'form-control', 'placeholder' => 'Enter your password' ]) }}
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>
                            {{ Form::close() }}
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt">
        2021 - <script>document.write(new Date().getFullYear())</script> &copy; CBCA Goma-Ville website by <a href="#" class="text-white-50">Media Team</a> 
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('assets/login/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/login/js/app.min.js') }}"></script>
    
</body>
@endsection