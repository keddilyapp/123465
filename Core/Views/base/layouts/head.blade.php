<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>@yield('title') | {{ $logo_details['system_name'] }}</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    @if (isset($logo_details['favicon']))
        <link rel="shortcut icon" href="{{ project_asset($logo_details['favicon']) }}">
    @else
        <link rel="shortcut icon" href="{{ asset('/public/backend/assets/img/favicon.png') }}">
    @endif

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/public/backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
    <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

    <!-- ======= TOASTER CSS======= -->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/css/toaster.min.css') }}">
    <!-- ======= TOASTER CSS======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

    <!-- Dropzone-->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/dropzone/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/daterangepicker/daterangepicker.css') }}">

    @yield('custom_css')
    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/css') }}/{{ $style_path }}/style.css">
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/css/custom.css') }}">
    <!-- ======= END MAIN STYLES ======= -->
    <style>
        .currency-font {
            font-family: "Roboto", sans-serif;
        }

        .single-notification-item {
            text-transform: none !important;
        }

        .search-side-bar {
            list-style: none;
        }

        #multiselectMediaWrapper {
            padding: 8px 17px;
            border: 1px solid gray;
        }

        div#multiselectMediaWrapper.active {
            background: #6045e2 !important;
            color: #fff;
            border-color: #6045e2 !important;
        }
    </style>
    @stack('head')
</head>
