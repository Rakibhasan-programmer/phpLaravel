<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Hyper | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    @include('admin.includes.css')

</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
<!-- Begin page -->
<div class="wrapper">
    @include('admin.includes.leftsidemenu')

    <div class="content-page">
        <div class="content">
            @include('admin.includes.navigation')

            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    @yield('admin_content')
                </div>
                <!-- end page title -->

            </div>
            <!-- container -->
        </div>
        <!-- content -->

        @include('admin.includes.footer')

    </div>

</div>
<!-- END wrapper -->

<div class="rightbar-overlay"></div>
<!-- /End-bar -->


@include('admin.includes.script')
</body>
</html>
