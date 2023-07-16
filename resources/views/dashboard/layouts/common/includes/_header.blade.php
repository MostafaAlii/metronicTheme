<!--begin::Header-->
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                <i class="bi bi-list fs-1"></i>
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="#" class="d-lg-none">
                <img alt="Logo" src="{{ asset ('dashboard/assets/media/logos/logo-demo13-compact.svg') }}"
                    class="h-25px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <!-- Start Dashboard Link -->
                        <div class="menu-item me-lg-1">
                            <a class="menu-link active py-3" href="#">
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>
                        <!-- End Dashboard Link -->
                        <!-- default is bottom-start in english but in arabic will be as bottom-end -->
                        <!-- Start Craft Menu -->
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="{{bottomStartDirectionClass()}}"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Crafted</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-archive fs-3"></i>
                                        </span>
                                        <span class="menu-title">Pages</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <!-- default is right-start in english but in arabic will be as left-start -->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Profile</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/profile/overview.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Overview</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/profile/projects.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Projects</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/profile/campaigns.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Campaigns</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/profile/documents.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Documents</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/profile/connections.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Connections</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/profile/activity.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Activity</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Projects</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">My Projects</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/project.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">View Project</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/targets.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Targets</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/budget.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Budget</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/users.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Users</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/files.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Files</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/activity.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Activity</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/projects/settings.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Settings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Wizards</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/wizards/horizontal.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Horizontal</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/wizards/vertical.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Vertical</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Search</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/search/horizontal.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Horizontal</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/search/vertical.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Vertical</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Blog</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/blog/home.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Blog Home</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/blog/post.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Blog Post</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Company</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/company/about.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">About Us</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/company/pricing.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Pricing</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/company/contact.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Contact Us</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/company/team.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Our Team</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/company/licenses.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Licenses</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/company/sitemap.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sitemap</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Careers</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/careers/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Careers List</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/careers/apply.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Careers Apply</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">FAQ</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/faq/classic.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Classic</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/pages/faq/extended.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Extended</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-person fs-2"></i>
                                        </span>
                                        <span class="menu-title">Account</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/security.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Security</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/billing.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Billing</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/statements.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Statements</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/referrals.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Referrals</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/account/api-keys.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">API Keys</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-sticky fs-3"></i>
                                        </span>
                                        <span class="menu-title">Authentication</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <!-- default is right-start in english but in arabic will be as left-start -->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Basic Flowxx</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/basic/sign-in.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/basic/sign-up.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/basic/two-steps.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/basic/password-reset.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Password Reset</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/basic/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Aside Flow</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/aside/sign-in.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/aside/sign-up.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/aside/two-steps.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/aside/password-reset.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Password Reset</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/aside/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Dark Flow</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/dark/sign-in.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/dark/sign-up.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/dark/two-steps.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/dark/password-reset.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Password Reset</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/flows/dark/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Extended</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/extended/multi-steps-sign-up.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Multi-steps Sign-up</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/extended/free-trial-sign-up.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Free Trial Sign-up</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/extended/coming-soon.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Coming Soon</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/general/welcome.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Welcome Message</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/general/verify-email.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Verify Email</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/general/password-confirmation.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Password Confirmation</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/general/deactivation.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Account Deactivation</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/general/error-404.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Error 404</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/general/error-500.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Error 500</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Email Templates</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/email/verify-email.html"
                                                        target="blank">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Verify Email</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/email/invitation.html"
                                                        target="blank">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Account Invitation</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/email/password-reset.html"
                                                        target="blank">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Password Reset</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/authentication/email/password-change.html"
                                                        target="blank">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Password Changed</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-shield-check fs-3"></i>
                                        </span>
                                        <span class="menu-title">Modals</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <!-- default is right-start in english but in arabic will be as left-start -->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">General</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/general/invite-friends.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Invite Friends</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/general/view-users.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">View Users</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/general/upgrade-plan.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Upgrade Plan</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/general/share-earn.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Share &amp; Earn</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Forms</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/forms/new-target.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">New Target</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/forms/new-card.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">New Card</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/forms/new-address.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">New Address</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/forms/create-api-key.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Create API Key</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Wizards</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/wizards/two-factor-authentication.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Two Factor Auth</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/wizards/create-app.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Create App</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/wizards/create-account.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Create Account</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/wizards/create-project.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Create Project</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/wizards/offer-a-deal.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Offer a Deal</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Search</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/search/users.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Users</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/modals/search/select-location.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Select Location</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-layers fs-3"></i>
                                        </span>
                                        <span class="menu-title">Widgets</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/widgets/lists.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Lists</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/widgets/statistics.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Statistics</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/widgets/charts.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Charts</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/widgets/mixed.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Mixed</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/widgets/tables.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tables</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/widgets/feeds.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Feeds</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Craft Menu -->
                        <!-- Start App Menu -->
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="{{bottomStartDirectionClass()}}"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Apps</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-people fs-3"></i>
                                        </span>
                                        <span class="menu-title">User Management</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!-- default is right-start in english but in arabic will be as left-start -->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/user-management/users/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Users List</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/user-management/users/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">View User</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- default is right-start in english but in arabic will be as left-start -->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Roles</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/user-management/roles/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Roles List</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/user-management/roles/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">View Roles</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/user-management/permissions.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Permissions</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-hr fs-3"></i>
                                        </span>
                                        <span class="menu-title">Invoice Management</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!-- default is right-start in english but in arabic will be as left-start -->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Profile</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/invoices/view/invoice-1.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Invoice 1</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/invoices/view/invoice-2.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Invoice 2</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/invoices/create.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Create Invoice</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-hr fs-3"></i>
                                        </span>
                                        <span class="menu-title">Support Center</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/support-center/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                        </div>
                                        <!-- default is right-start in english but in arabic will be as left-start -->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tickets</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/support-center/tickets/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Ticket List</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/support-center/tickets/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Ticket View</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- default is right-start in english but in arabic will be as left-start -->
                                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                            class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link py-3">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tutorials</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/support-center/tutorials/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Tutorials List</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3"
                                                        href="../../demo13/dist/apps/support-center/tutorials/post.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Tutorials Post</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/support-center/faq.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">FAQ</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/support-center/licenses.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Licenses</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/support-center/contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Contact Us</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-printer fs-3"></i>
                                        </span>
                                        <span class="menu-title">Customers</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/customers/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/customers/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customer Listing</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/customers/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customer Details</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-cart2 fs-3"></i>
                                        </span>
                                        <span class="menu-title">Devs Forum</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/devs/ask.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Ask a Question</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/devs/tag.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Question Tags</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/devs/question.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Question</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/devs/search.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Search Questions</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-cart2 fs-3"></i>
                                        </span>
                                        <span class="menu-title">Subscriptions</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/subscriptions/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/subscriptions/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Subscription List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/subscriptions/add.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add Subscription</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/subscriptions/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Subscription</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi-chat-left fs-3"></i>
                                        </span>
                                        <span class="menu-title">Chat</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/chat/private.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Private Chat</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/chat/group.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Group Chat</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="../../demo13/dist/apps/chat/drawer.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Drawer Chat</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-down-accordion">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi-chat-left fs-3"></i>
                                        </span>
                                        <span class="menu-title">File Manager</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/file-manager/folders.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Folders</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/file-manager/files.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/file-manager/blank.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Blank Directory</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/apps/file-manager/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End App Menu -->
                        <!-- Start Layouts Menu -->
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="{{bottomStartDirectionClass()}}"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Layouts</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <!-- default is right-start in english but in arabic will be as left-start -->
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                    data-kt-menu-placement="{{rightStartDirectionClass()}}"
                                    class="menu-item menu-lg-dropdown">
                                    <span class="menu-link py-3">
                                        <span class="menu-icon">
                                            <i class="bi bi-layout-sidebar fs-3"></i>
                                        </span>
                                        <span class="menu-title">Aside</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3"
                                                href="../../demo13/dist/layouts/aside/minimized.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Minimized</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Layouts Menu -->
                        <!-- Start Resources Menu -->
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="{{bottomStartDirectionClass()}}"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Resources</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="../../demo13/dist/documentation/base/utilities.html"
                                        title="Check out over 200 in-house components, plugins and ready for use solutions"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                                        fill="black" />
                                                    <path
                                                        d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Components</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3"
                                        href="../../demo13/dist/documentation/getting-started.html"
                                        title="Check out the complete documentation" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <i class="bi bi-box fs-3"></i>
                                        </span>
                                        <span class="menu-title">Documentation</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3"
                                        href="https://preview.keenthemes.com/metronic8/demo13/layout-builder.html"
                                        title="Build your layout, preview and export HTML for server side integration"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon">
                                            <i class="bi bi-layers fs-3"></i>
                                        </span>
                                        <span class="menu-title">Layout Builder</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3"
                                        href="../../demo13/dist/documentation/getting-started/changelog.html">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Changelog v8.0.26</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Resources Menu -->
                        <!-- Start Mega Menu -->
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="{{bottomStartDirectionClass()}}"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Mega Menu</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-600px p-5 p-lg-5">
                                <!--begin:Row-->
                                <div class="row" data-kt-menu-dismiss="true">
                                    <!--begin:Col-->
                                    <div class="col-lg-4 border-left-lg-1">
                                        <div class="menu-inline menu-column menu-active-bg">
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div class="col-lg-4 border-left-lg-1">
                                        <div class="menu-inline menu-column menu-active-bg">
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div class="col-lg-4 border-left-lg-1">
                                        <div class="menu-inline menu-column menu-active-bg">
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="#" class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Example link</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                        </div>
                        <!-- End Mega Menu -->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Toolbar wrapper-->
                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                    <!--begin::Quick links-->
                    <div class="d-flex align-items-stretch">
                        <!--begin::Menu wrapper-->
                        <!-- default is bottom-end in english but in arabic will be as bottom-start -->
                        <div class="topbar-item px-3 px-lg-5" data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                            data-kt-menu-placement="{{bottomEndDirectionClass()}}" data-kt-menu-flip="bottom">
                            <i class="bi bi-bar-chart fs-3"></i>
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                                style="background-image:url('{{asset("dashboard/assets/media/misc/pattern-1.jpg")}}')">
                                <!--begin::Title-->
                                <h3 class="text-white fw-bold mb-3">Quick Links</h3>
                                <!--end::Title-->
                                <!--begin::Status-->
                                <span class="badge bg-primary py-2 px-3">25 pending tasks</span>
                                <!--end::Status-->
                            </div>
                            <!--end::Heading-->
                            <!--begin:Nav-->
                            <div class="row g-0">
                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="../../demo13/dist/pages/projects/budget.html"
                                        class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                                                    fill="black" />
                                                <path
                                                    d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
                                        <span class="fs-7 text-gray-400">eCommerce</span>
                                    </a>
                                </div>
                                <!--end:Item-->
                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="../../demo13/dist/pages/projects/settings.html"
                                        class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
                                        <span class="fs-7 text-gray-400">Console</span>
                                    </a>
                                </div>
                                <!--end:Item-->
                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="../../demo13/dist/pages/projects/list.html"
                                        class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
                                        <span class="fs-7 text-gray-400">Pending Tasks</span>
                                    </a>
                                </div>
                                <!--end:Item-->
                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="../../demo13/dist/pages/projects/users.html"
                                        class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                    fill="black" />
                                                <path
                                                    d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
                                        <span class="fs-7 text-gray-400">Latest cases</span>
                                    </a>
                                </div>
                                <!--end:Item-->
                            </div>
                            <!--end:Nav-->
                            <!--begin::View more-->
                            <div class="py-2 text-center border-top">
                                <a href="../../demo13/dist/pages/profile/activity.html"
                                    class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="black" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </div>
                            <!--end::View more-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Quick links-->
                    <!--begin::Chat-->
                    <div class="d-flex align-items-stretch">
                        <!--begin::Menu wrapper-->
                        <div class="topbar-item position-relative px-3 px-lg-5" id="kt_drawer_chat_toggle">
                            <i class="bi bi-chat-left-text fs-3"></i>
                            <span
                                class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink"></span>
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Chat-->
                    <!--begin::Notifications-->
                    <div class="d-flex align-items-stretch">
                        <!--begin::Menu wrapper-->
                        <!-- default is bottom-end in english but in arabic will be as bottom-start -->
                        <div class="topbar-item position-relative px-3 px-lg-5" data-kt-menu-trigger="click"
                            data-kt-menu-attach="parent" data-kt-menu-placement="{{bottomEndDirectionClass()}}"
                            data-kt-menu-flip="bottom">
                            <i class="bi bi-app-indicator fs-3"></i>
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                style="background-image:url('{{ asset("dashboard/assets/media/misc/pattern-1.jpg")
                                }}')">
                                <!--begin::Title-->
                                <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                    <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Tabs-->
                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab panel Alert Notification Panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                                        Alice</a>
                                                    <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 hr</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="../../demo13/dist/pages/profile/activity.html"
                                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel Alert Notification Panel-->
                                <!--begin::Tab panel Updates Notification Panel-->
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column px-9">
                                        <!--begin::Section-->
                                        <div class="pt-10 pb-0">
                                            <!--begin::Title-->
                                            <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you
                                                honest. They stoping you from amazing poorly about drive</div>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="text-center mt-5 mb-9">
                                                <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img class="mw-100 mh-200px" alt="image" src="{{ asset("
                                                assets/dashboard/media/illustrations/unitedpalms-1/1.png") }}" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab panel Updates Notification Panel-->
                                <!--begin::Tab panel Logs Notification Panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="../../demo13/dist/pages/profile/activity.html"
                                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel Logs Notification Panel-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Notifications-->

                    <!--begin::User-->
                    @include('dashboard.layouts.common.includes._user_menu')
                    <!--end::User -->

                    <!--begin::Heaeder menu toggle-->
                    <div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
                        <div class="topbar-item" id="kt_header_menu_mobile_toggle">
                            <i class="bi bi-text-left fs-1"></i>
                        </div>
                    </div>
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->