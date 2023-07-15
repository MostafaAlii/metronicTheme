@include('dashboard.layouts.common.includes._tpl_start')

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        @include('dashboard.layouts.common.includes._sidebar')

        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include('dashboard.layouts.common.includes._header')

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                @include('dashboard.layouts.common.includes._toolbar')

                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        @include('dashboard.layouts.common._partial.messages')
                        @yield('content')
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->

            @include('dashboard.layouts.common.includes._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
@include('dashboard.layouts.common.includes.drawers.activities')
@include('dashboard.layouts.common.includes.drawers.chat')
@include('dashboard.layouts.common.includes.drawers.explore')
@include('dashboard.layouts.common.includes.drawers._create_app')

@include('dashboard.layouts.common.includes._tpl_end')