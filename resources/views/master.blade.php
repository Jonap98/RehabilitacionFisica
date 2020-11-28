@switch(Auth::user()->rol)
    @case(1)
    @include('header')
 
    <!--begin::Body-->
    <body id="kt_body" class="page-loading-enabled page-loading header-fixed header-mobile-fixed page-loading">
   
        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
            <!--begin::Logo-->
            <a href="{{ URL::to('/') }}">
                <img alt="Logo" src="{{asset('assets/media/logos/LogoWhite.png')}}" class="max-h-45px" />
                
            </a>
            <!--end::Logo-->

            
            {{--
            <a href=""><span class="text-white font-weight-bolder d-md-inline">Inicio</span></a>

            <div class="reloj" id="reloj"></div>  --}}
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <a href="{{action('HomeController@index')}}">
                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-3">                            
                            <h3><strong>Inicio</strong></h3>
                        </div>
                    </div>
                </a>
                <a href="{{action('UserController@index')}}">
                        <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                            <div class="d-flex flex-column text-right pr-3">
                                <h3><strong>Pacientes</strong></h3>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                            <div class="d-flex flex-column text-right pr-3">
                                <h3><strong>Carga</strong></h3>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{action('TherapyController@index')}}">Tipo de terapias</a>
                        <a class="dropdown-item" href="{{action('ExerciseController@index')}}">Ejercicios</a>
                    </div>
                <div class="topbar-item">
                    <a href="#" class="dropdown" data-toggle="dropdown">
                        <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                            <div class="d-flex flex-column text-right pr-3">                            
                            </div>
                            <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">{{ strtoupper(substr(Auth::user()->name,0,1)) }}{{strtoupper(substr(Auth::user()->paterno,0,1))}}</span>
                            </span>
                        </div>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                        </div>
                    </a>
                </div>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                
                    @include('menu')

                    @yield('content')
                                
                    <!--begin::Footer-->
                    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                        <!--begin::Container-->
                        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted font-weight-bold mr-2"><?= date("Y")."©" ?></span>
                                <a href="#" target="_blank" class="text-dark-75 text-hover-primary">Reabilitación App  </a>
                                <!--<a href="#" target="_blank" class="text-dark-75 text-hover-primary">Developed by JonaP9.8</a>-->
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Nav-->
                            <div class="nav nav-dark order-1 order-md-2">
                                Versión 1.0
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        <div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
        <!--end::Scrolltop-->
        @include('userpanel')
    
@include('footer')
    @break
@endswitch
