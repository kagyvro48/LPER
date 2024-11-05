<!DOCTYPE html>
<html lang="fr" dir="ltr" data-startbar="dark" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>{{ env("APP_NAME") }} | @yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="{{ __('meta_description') }}" name="description"/>
    <meta content="{{ __('meta_author') }}" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- Icône du site -->
    <link rel="shortcut icon" href="{{ asset('assets/back/images/favicon.ico') }}">

    <!-- Plugins additionnels -->
    <link href="{{ asset("assets/back/libs/simple-datatables/style.css" )}}" rel="stylesheet" type="text/css"/>

    <!-- CSS de l'application -->
    <link href="{{ asset('assets/back/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/back/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/back/css/app.min.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body>

@include("layouts.partials.top-bar")
@include("layouts.partials.left-bar")

<div class="page-wrapper">
    <!-- Contenu de la page -->
    <div class="page-content">
        <div class="container-xxl">
            @yield('body')
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom justify-content-between">
                <h5 class="m-0 font-14" id="AppearanceLabel">{{ __('appearance.title') }}</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
                        aria-label="{{ __('close') }}"></button>
            </div>
            <div class="offcanvas-body">
                <h6>{{ __('appearance.account_settings') }}</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">{{ __('auto_updates') }}</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">{{ __('location_permission') }}</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">{{ __('show_offline_contacts') }}</label>
                    </div>
                </div>
                <h6>{{ __('appearance.general_settings') }}</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">{{ __('show_as_online') }}</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">{{ __('status_visible') }}</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">{{ __('notifications_popup') }}</label>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer text-center text-sm-start d-print-none">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0 rounded-bottom-0">
                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    ©
                                    <script> document.write(new Date().getFullYear()) </script>
                                    {{ env('APP_NAME') }}
                                    <span class="text-muted d-none d-sm-inline-block float-end">
                                        {{ __('designed_with') }}
                                        <i class="iconoir-heart text-danger"></i>
                                        {{ __('footer_by') }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Core JS Libraries -->
<script src="{{ asset('assets/back/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/back/libs/simplebar/simplebar.min.js') }}"></script>

<!-- Selectr Library pour les sélections avancées -->
<script src="{{ asset('assets/back/libs/mobius1-selectr/selectr.min.js') }}"></script>

<!-- Huebee pour les sélecteurs de couleur -->
<script src="{{ asset('assets/back/libs/huebee/huebee.pkgd.min.js') }}"></script>

<!-- VanillaJS DatePicker pour les sélecteurs de date -->
<script src="{{ asset('assets/back/libs/vanillajs-datepicker/js/datepicker-full.min.js') }}"></script>

<!-- Moment.js pour la gestion des dates -->
<script src="{{ asset('assets/back/js/moment.js') }}"></script>

<!-- iMask pour le masquage de saisie -->
<script src="{{ asset('assets/back/libs/imask/imask.min.js') }}"></script>

<!-- DataTables pour les tables dynamiques -->
<script src="{{ asset('assets/back/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/back/js/pages/datatable.init.js') }}"></script>

<!-- Scripts avancés pour les formulaires -->
<script src="{{ asset('assets/back/js/pages/forms-advanced.js') }}"></script>

<!-- Application JavaScript principal -->
<script src="{{ asset('assets/back/js/app.js') }}"></script>
</body>
</html>
