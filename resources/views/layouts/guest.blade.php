<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">


<head>


    <meta charset="utf-8"/>
    <title>{{ env("APP_NAME")  }} | @yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/back/images/favicon.ico') }}">


    <!-- App css -->
    <link href="{{ asset('assets/back/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/back/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/back/css/app.min.css') }}" rel="stylesheet" type="text/css"/>

</head>


<!-- Top Bar Start -->
<body>
<div class="container-xxl">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                <div class="text-center p-3">
                                    <a href="index-2.html" class="logo logo-admin">
                                        <img src="{{ asset('assets/back/images/logo-sm.png') }}" height="50" alt="logo"
                                             class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Bienvenue</h4>
                                    <p class="text-muted fw-medium mb-0">Connectez-vous pour continuer sur {{ env("APP_NAME") }}.</p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                @yield("body")
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div><!-- container -->
</body>
<!--end body-->

</html>
