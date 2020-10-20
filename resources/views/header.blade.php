<!--begin::Head-->
<head><base href="">
		<meta charset="utf-8" />
		<title>Iselsa System</title>
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
	<!--end::Head-->