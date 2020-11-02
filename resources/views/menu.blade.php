<!--begin::Header-->
<div id="kt_header" class="header flex-column header-fixed">
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Left-->
            <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Logo-->
                <a href="#" class="mr-20">
                {{--<a href="{{ action('HomeController@home') }}" class="mr-20">--}}
                    <img alt="Logo" src="{{asset('assets/media/logos/LogoWhite.png')}}" class="max-h-45px" />
                </a>
                <!--end::Logo-->
                {{--
                <a href=""><span class="text-white font-weight-bolder d-none d-md-inline">Inicio</span></a>
                <div class="reloj" id="reloj2"></div>
                --}}
                    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                        <!--begin::Header Nav-->
                        <ul class="menu-nav">
                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                <a href="">
                                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">                            
                                            <h3><strong>Inicio</strong></h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                                <a href="">
                                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">
                                            <h3><strong>Pacientes</strong></h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                                <a href="{{action('ExerciseController@index')}}">
                                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">
                                            <h3><strong>Carga</strong></h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
            <!--end::Left-->
          
            <!--begin::Topbar-->
            <div class="topbar" id="appnotify">
                
                
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-3">                            
                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </div>
                        <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">{{ strtoupper(substr(Auth::user()->name,0,1))  }}</span>
                        </span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
</div>
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.4"></script>
<!--end::Global Theme Bundle-->