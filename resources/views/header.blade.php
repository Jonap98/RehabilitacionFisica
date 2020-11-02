<!--begin::Head-->
<head><base href="">
		<meta charset="utf-8" />
		<title>Rehabilitación App</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="{{asset('css/font.css')}}" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin Toastr-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/leaflet/leaflet.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

		@yield('clases')
		
		<style>

			.reloj {
				/* font-family: Oswald, Arial; */
				width: 100%;
				padding: 20px;
				font-size: 2em;
				text-align: center;
				color: aliceblue;
			}


		</style>
		
	</head>
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js?v=7.0.4"></script>
	<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
	<script src="assets/js/scripts.bundle.js?v=7.0.4"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js?v=7.0.4"></script>
		<!--end::Page Scripts-->
	<!--end::Head-->