		
		<script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token() ]); !!}
        </script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->	
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->
		
		
		@if (Auth::user())
			<script src="{{ asset('js/app.js') }}"></script>
		
			@yield('scripts')

		
			<script type="text/javascript">
				//<![CDATA[
				var h = 0, s = 0;
				var ampm = "";
				var date = new Date();
				var d  = date.getDate();
				var day = (d < 10) ? '0' + d : d;
				var m = date.getMonth() + 1;
				var month = (m < 10) ? '0' + m : m;
				var yy = date.getYear();
				var year = (yy < 1000) ? yy + 1900 : yy;
				//document.write(day + "/" + month + "/" + year);
				//]]>
				<!-- hora -->
				function startTime(){
					today=new Date();
					h=today.getHours();
					m=today.getMinutes();
					s=today.getSeconds();
					m=checkTime(m);
					s=checkTime(s);

					if (h >= 12) {
						h = h - 12;
						ampm = 'PM';
					} else {
						ampm = 'AM';
					}

					if (h == 0 ){
						h = 12;
					}
					document.getElementById('reloj').innerHTML = h + ":" + m + ":" + s + " " + ampm;
					document.getElementById('reloj2').innerHTML = h + ":" + m + ":" + s + " " + ampm;
					t=setTimeout('startTime()',500);
				}
				function checkTime(i){
					if (i<10) {
						i="0" + i;
					}
					return i;
				}
				window.onload=function(){startTime();}
			</script>
		@endif
	</body>
	<!--end::Body-->
</html>