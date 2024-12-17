<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ url('/assets') }}/images/logo/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('/assets') }}/images/logo/favicon-icon.png" type="image/x-icon">
    <title>Zeta admin dashboard </title>
    @include('admin.components.style.css')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-ball"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.components.layout.header')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.components.layout.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
    <!-- footer start-->
    @include('admin.components.layout.footer')
    </div>
    </div>
    @include('admin.components.style.js')
    <!-- Plugin used-->
</body>

</html>
