<!-- leftbar-tab-menu -->
<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="{{ route('dashboard') }}" class="logo">
            <span>
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end brand-->

    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <span>{{ __('messages.main_menu') }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.index') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.user') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.services') }}</span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="index-2.html">{{ __('messages.service_list') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ecommerce-index.html">{{ __('messages.create_service') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- Update message section -->
                <div class="update-msg text-center">
                    <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box rounded-circle mx-auto">
                        <i class="iconoir-peace-hand h3 align-self-center mb-0 text-primary"></i>
                    </div>
                    <h5 class="mt-3">BENKY Themes</h5>
                    <p class="mb-3 text-muted">{{ env("APP_NAME") }} {{ __('messages.high_quality_app') }}</p>
                    <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill">{{ __('messages.update') }}</a>
                </div>
            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div><!--end startbar-->
<div class="startbar-overlay d-print-none"></div>
<!-- end leftbar-tab-menu-->
