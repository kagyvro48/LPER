<!-- Top Bar Start -->
<div class="topbar d-print-none">
    <div class="container-xxl">
        <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">
            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                <li>
                    <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                        <i class="iconoir-menu-scale"></i>
                    </button>
                </li>
                <li class="mx-3 welcome-text">
                    <h3 class="mb-0 fw-bold text-truncate">{{ __("messages.good_morning") }}, James!</h3>
                </li>
            </ul>
            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                <li class="hide-phone app-search">
                    <form role="search" action="#" method="get">
                        <input type="search" name="search" class="form-control top-search mb-0" placeholder="{{ __('messages.search_placeholder') }}">
                        <button type="submit"><i class="iconoir-search"></i></button>
                    </form>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/back/images/flags/us_flag.jpg') }}" alt="" class="thumb-sm rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/back/images/flags/us_flag.jpg') }}" alt="" height="15" class="me-2">{{ __('messages.english') }}</a>
                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/back/images/flags/french_flag.jpg') }}" alt="" height="15" class="me-2">{{ __('messages.french') }}</a>
                    </div>
                </li><!--end topbar-language-->
                <li class="topbar-item">
                    <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                        <i class="icofont-moon dark-mode"></i>
                        <i class="icofont-sun light-mode"></i>
                    </a>
                </li>
                <li class="dropdown topbar-item">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/back/images/users/avatar-1.jpg') }}" alt="" class="thumb-lg rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/back/images/users/avatar-1.jpg') }}" alt="" class="thumb-md rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                <h6 class="my-0 fw-medium text-dark fs-13">William Martin</h6>
                                <small class="text-muted mb-0">{{ __('messages.front_end_developer') }}</small>
                            </div>
                        </div>
                        <div class="dropdown-divider mt-0"></div>
                        <small class="text-muted px-2 pb-1 d-block">{{ __('messages.account') }}</small>
                        <a class="dropdown-item" href="{{ asset('pages-profile.html') }}"><i class="las la-user fs-18 me-1 align-text-bottom"></i> {{ __('messages.profile') }}</a>
                        <a class="dropdown-item" href="{{ asset('pages-faq.html') }}"><i class="las la-wallet fs-18 me-1 align-text-bottom"></i> {{ __('messages.earning') }}</a>
                        <small class="text-muted px-2 py-1 d-block">{{ __('messages.settings') }}</small>
                        <a class="dropdown-item" href="{{ asset('pages-profile.html') }}"><i class="las la-cog fs-18 me-1 align-text-bottom"></i> {{ __('messages.account_settings') }}</a>
                        <a class="dropdown-item" href="{{ asset('pages-profile.html') }}"><i class="las la-lock fs-18 me-1 align-text-bottom"></i> {{ __('messages.security') }}</a>
                        <a class="dropdown-item" href="{{ asset('pages-faq.html') }}"><i class="las la-question-circle fs-18 me-1 align-text-bottom"></i> {{ __('messages.help_center') }}</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item text-danger" href="{{ asset('auth-login.html') }}"><i class="las la-power-off fs-18 me-1 align-text-bottom"></i> {{ __('messages.logout') }}</a>
                    </div>
                </li>
            </ul><!--end topbar-nav-->
        </nav>
    </div>
</div>
<!-- Top Bar End -->
