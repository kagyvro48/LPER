<!-- leftbar-tab-menu -->
<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="{{ route('dashboard') }}" class="logo">
            <span>
                <img src="{{ asset('assets/back/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
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
                                    <a class="nav-link" href="#">{{ __('messages.service_list') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('messages.create_service') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarProjects" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.projects') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarMessages" role="button" aria-expanded="false" aria-controls="sidebarMessages">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.messages') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarInvoices" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.invoices') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarSettings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSettings">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>{{ __('messages.settings') }}</span>
                        </a>
                        <div class="collapse" id="sidebarSettings">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('messages.profile_settings') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('messages.notification_settings') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('messages.security_settings') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- Update message section -->
                <div class="update-msg text-center">
                    <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box rounded-circle mx-auto">
                        <i class="fa fa-refresh h3 align-self-center mb-0 text-primary"></i>
                    </div>
                    <p class="mb-3 text-muted">{{ env("APP_NAME") }} {{ __('messages.high_quality_app') }}</p>
                    <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill">{{ __('messages.update') }}</a>
                </div>
            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div><!--end startbar-->
<div class="startbar-overlay d-print-none"></div>
<!-- end leftbar-tab-menu-->
