<!--begin::User-->
<div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px"
        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
        data-kt-menu-flip="bottom">
        <img src="{{asset('dashboard/assets/media/avatars/150-2.jpg')}}" alt="metronic" />
    </div>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{asset('dashboard/assets/media/avatars/150-26.jpg')}}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo13/dist/account/overview.html" class="menu-link px-5">My Profile</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo13/dist/pages/projects/list.html" class="menu-link px-5">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                </span>
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
            <a href="#" class="menu-link px-5">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo13/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo13/dist/account/billing.html" class="menu-link px-5">Billing</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo13/dist/account/statements.html" class="menu-link px-5">Payments</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo13/dist/account/statements.html"
                        class="menu-link d-flex flex-stack px-5">Statements
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="View your statements"></i></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                                name="notifications" />
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo13/dist/account/statements.html" class="menu-link px-5">My
                Statements</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="{{leftStartDirectionClass()}}">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">
                    Languages
                    <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                        {{ LaravelLocalization::getCurrentLocaleNative() }}
                        @if(App::getLocale() == 'ar')
                        <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('dashboard/assets/media/flags/egypt.svg') }}" />
                        @elseif(App::getLocale() == 'en')
                        <img class="w-15px h-15px rounded-1 ms-2"
                            src="{{ asset('dashboard/assets/media/flags/united-states.svg') }}" />
                        @endif
                    </span>
                </span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="menu-item px-3">
                    <a class="menu-link d-flex px-5 active" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <span class="symbol symbol-20px me-4">
                            @if($properties['native'] == 'العربية')
                                <img class="rounded-1" src="{{ asset('dashboard/assets/media/flags/egypt.svg') }}" />
                            @elseif($properties['native'] == "English")
                            <img class="rounded-1" src="{{ asset('dashboard/assets/media/flags/united-states.svg') }}" />
                            @endif
                        </span>
                        {{ $properties['native'] }}
                    </a>
                </div>
                @endforeach
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5 my-1">
            <a href="../../demo13/dist/account/settings.html" class="menu-link px-5">Account
                Settings</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo13/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <div class="menu-content px-5">
                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                    for="kt_user_menu_dark_mode_toggle">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
                        id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo13/dist/index.html" />
                    <span class="pulse-ring ms-n1"></span>
                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                </label>
            </div>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
<!--end::User -->