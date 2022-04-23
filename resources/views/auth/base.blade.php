<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8" />
        <title>Log In | Administration - CBCA Goma Ville</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="CBCA Goma Ville administration panel" name="description" />
        <meta content="Media Team" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://coderthemes.com/ubold/layouts/assets/images/favicon.ico">

		<!-- App css -->
		<link href="{{ asset('assets/login/css/config/default/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ asset('assets/login/css/config/default/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ asset('assets/login/css/config/default/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{ asset('assets/login/css/config/default/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{ asset('assets/login/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>
  @yield('content')

</html>