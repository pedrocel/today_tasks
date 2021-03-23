<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Today Task | @yield('titulo')</title>
    <meta name="description" content="Metronic stack layouts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->
    <style>

        .errors {
            color: red;
        }

        .btn-green {

            color: green;

        }

        .btn-red {

            color: red;

        }

        body.m-aside-left--skin-dark .m-header .m-header-head {
            background-color: #15274d;
        }
        .m-stack__item.m-brand.m-brand--skin-dark {
            background-color: #15274d;

        }

        .teste .m-menu__item--open{

            background-color: #0a6aa1 ;
        }

        #m_aside_left.m-grid__item.m-aside-left.m-aside-left--skin-dark {
            background-color: #ecedff;

        }

        #m_aside_left.m-grid__item.m-aside-left.m-aside-left--skin-dark {
            background-color: #ecedff;

        }

        li.m-menu__item--open {
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            background-color: #ffffff;
        }


        .m-topbar__userpic{
            color: aliceblue;
        }

        .blue-soft {
            background-color: #4C87B9;
            color: white;
        }


        .blue-soft:link {
            background-color: #4B77BE;
            color: white;
        }

        /* visited link */
        .blue-soft:visited {
            background-color: #4B77BE;
            color: white;
        }

        /* mouse over link */
        .blue-soft:hover {
            background-color: #4B77BE;
            color: white;
        }

        /* selected link */
        .blue-soft:active {
            background-color: #4B77BE;
            color: white;
        }
        element.style {
            top: 12px;
        }

        body.m-aside-left--skin-dark .m-header .m-header-head {
            background-color: #111;
        }

        .m-stack__item.m-brand.m-brand--skin-dark {
            background-color: #111;
        }

        #m_aside_left.m-grid__item.m-aside-left.m-aside-left--skin-dark {
            background-color: #ffffff;
        }


        .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target {
            left: -10px;
        }
        .kt-ribbon--info .kt-ribbon__target {
            background-color: #5578eb;
            color: #ffffff;
        }
        .kt-ribbon .kt-ribbon__target {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            background-color: #5d78ff;
            color: #ffffff;
        }
        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        user agent stylesheet
        div {
            display: block;
        }
        .kt-portlet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-shadow: 0px 0px 13px 0px rgba(82, 63, 105, 0.05);
            box-shadow: 0px 0px 13px 0px rgba(82, 63, 105, 0.05);
            background-color: #ffffff;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .kt-grid.kt-grid--hor:not(.kt-grid--desktop):not(.kt-grid--desktop-and-tablet):not(.kt-grid--tablet):not(.kt-grid--tablet-and-mobile):not(.kt-grid--mobile) {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        .kt-grid.kt-grid--ver:not(.kt-grid--desktop):not(.kt-grid--desktop-and-tablet):not(.kt-grid--tablet):not(.kt-grid--tablet-and-mobile):not(.kt-grid--mobile) {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:before {
            border-width: 0 10px 10px 0;
            border-right-color: #222 !important;
            left: 0;
        }
        .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:before, .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:after {
            content: '';
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px;
        }
        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:before, .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:after {
            content: '';
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px;
        }
        .kt-ribbon--info .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #5578eb;
            border-right-color: #5578eb;
        }

        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        ::-webkit-scrollbar-button {
            display: none;
        }
        kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target {
            left: -10px; }
        .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:before, .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:after {
            content: '';
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px; }
        .kt-ribbon--clip.kt-ribbon--left .kt-ribbon__target .kt-ribbon__inner:before {
            border-width: 0 10px 10px 0;
            border-right-color: #222 !important;
            left: 0;
        }
        .kt-ribbon--clip.kt-ribbon--right .kt-ribbon__target {
            right: -10px; }
        .kt-ribbon--clip.kt-ribbon--right .kt-ribbon__target .kt-ribbon__inner:before, .kt-ribbon--clip.kt-ribbon--right .kt-ribbon__target .kt-ribbon__inner:after {
            content: '';
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px; }
        .kt-ribbon--clip.kt-ribbon--right .kt-ribbon__target .kt-ribbon__inner:before {
            border-width: 0 0 10px 10px;
            border-left-color: #222 !important;
            right: 0; }
        .kt-ribbon--flag .kt-ribbon__target > .kt-ribbon__inner:after {
            border-left: 18px solid;
            border-right: 18px solid;
            border-bottom: 1em solid transparent !important;
            bottom: -1em;
            content: '';
            height: 0;
            left: 0;
            position: absolute;
            width: 0; }
        .kt-ribbon--brand .kt-ribbon__target {
            background-color: #5d78ff;
            color: #ffffff; }
        .kt-ribbon--brand .kt-ribbon__target:after {
            border-color: rgba(255, 255, 255, 0.5); }
        .kt-ribbon--brand .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #5d78ff;
            color: #ffffff; }
        .kt-ribbon--brand .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #5d78ff;
            border-right-color: #5d78ff; }
        .kt-ribbon--light .kt-ribbon__target {
            background-color: #ffffff;
            color: #282a3c; }
        .kt-ribbon--light .kt-ribbon__target:after {
            border-color: rgba(40, 42, 60, 0.5); }
        .kt-ribbon--light .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #ffffff;
            color: #282a3c; }
        .kt-ribbon--light .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #ffffff;
            border-right-color: #ffffff; }
        .kt-ribbon--dark .kt-ribbon__target {
            background-color: #282a3c;
            color: #ffffff; }
        .kt-ribbon--dark .kt-ribbon__target:after {
            border-color: rgba(255, 255, 255, 0.5); }
        .kt-ribbon--dark .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #282a3c;
            color: #ffffff; }
        .kt-ribbon--dark .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #282a3c;
            border-right-color: #282a3c; }
        .kt-ribbon--primary .kt-ribbon__target {
            background-color: #5867dd;
            color: #ffffff; }
        .kt-ribbon--primary .kt-ribbon__target:after {
            border-color: rgba(255, 255, 255, 0.5); }
        .kt-ribbon--primary .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #5867dd;
            color: #ffffff; }
        .kt-ribbon--primary .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #5867dd;
            border-right-color: #5867dd; }
        .kt-ribbon--success .kt-ribbon__target {
            background-color: #0abb87;
            color: #ffffff; }
        .kt-ribbon--success .kt-ribbon__target:after {
            border-color: rgba(255, 255, 255, 0.5); }
        .kt-ribbon--success .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #0abb87;
            color: #ffffff; }
        .kt-ribbon--success .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #0abb87;
            border-right-color: #0abb87; }
        .kt-ribbon--info .kt-ribbon__target {
            background-color: #5578eb;
            color: #ffffff; }
        .kt-ribbon--info .kt-ribbon__target:after {
            border-color: rgba(255, 255, 255, 0.5); }
        .kt-ribbon--info .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #5578eb;
            color: #ffffff; }
        .kt-ribbon--info .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #5578eb;
            border-right-color: #5578eb; }
        .kt-ribbon--warning .kt-ribbon__target {
            background-color: #ffb822;
            color: #111111; }
        .kt-ribbon--warning .kt-ribbon__target:after {
            border-color: rgba(17, 17, 17, 0.5); }
        .kt-ribbon--warning .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #ffb822;
            color: #111111; }
        .kt-ribbon--warning .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #ffb822;
            border-right-color: #ffb822; }
        .kt-ribbon--danger .kt-ribbon__target {
            background-color: #fd397a;
            color: #ffffff; }
        .kt-ribbon--danger .kt-ribbon__target:after {
            border-color: rgba(255, 255, 255, 0.5); }
        .kt-ribbon--danger .kt-ribbon__target > .kt-ribbon__inner {
            background-color: #fd397a;
            color: #ffffff; }
        .kt-ribbon--danger .kt-ribbon__target > .kt-ribbon__inner:after {
            border-color: transparent;
            border-left-color: #fd397a;
            border-right-color: #fd397a; }


        img {
            width: 100%;
            vertical-align: middle;
            border-style: none;
        }



    </style>
    <!--begin::Base Styles -->

    {{Html::style('vendors/base/vendors.bundle.css')}}
    {{Html::style('demo/default/base/style.bundle.css')}}
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">


    @yield('css')

<!--end::Base Styles -->
    {{--<link rel="shortcut icon" href="../../assets/demo/default/media/img/logo/favicon.ico" />--}}
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="{{route('login')}}" class="m-brand__logo-wrapper">
{{--                                {{Html::image('img/logo_banner.jpeg')}}--}}
                                <img src="img/logo_banner.jpeg" alt="Nature" class="responsive" width="100" height="50">
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Horizontal Menu -->
                @include('layouts.menuHeader')
                <!-- END: Horizontal Menu -->

                    <!-- BEGIN: Topbar -->
                @include('layouts.menuNotification')
                <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <!-- BEGIN: Aside Menu -->
            <!-- BEGIN: Aside Menu -->
        @include('layouts.menu')
        <!-- END: Aside Menu -->
        <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
        {{--@include('layouts.subheader')--}}
        <!-- END: Subheader -->
            <div class="m-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
@include('layouts.footer')
<!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<!--begin::Base Scripts -->

{{Html::script('vendors/base/vendors.bundle.js')}}
{{Html::script('demo/default/base/scripts.bundle.js')}}

@yield('js')


<!--end::Base Scripts -->
</body>

<!-- end::Body -->
</html>
