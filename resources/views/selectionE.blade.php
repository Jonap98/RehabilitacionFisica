@section('classes')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Custom Styles(used by providers page)-->
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@extends('master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card-title">
                <h3 class="card-label">Ejercicio actual
            </div>
            <!--begin::Row-->
            <div class="row">
                @foreach ($exercise as $ex)
                <div class="col-xl-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Section-->
                            <div class="video-responsive" style="overflow: hidden; justify-content: center; align-items: center;">
                                <video class="player"   height="250" data-user=@json($ex->exercise_id) controls>
                                    <source src="{{'http://localhost/RehabilitacionApp/public'.$ex->exercise_path}}" type="video/mp4">
                                    Tu navegador no soporta los vídeos de HTML5
                                </video>
                            </div>
                            <br>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column mr-auto">
                                    <!--begin: Title-->
                                    <a href="#" class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">{{$ex->exercise_name}}</a>
                                    <!--end::Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <br>
                            <!--end::Section-->
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{--
<script>
    $(".btnenviar").click(function(e){
document.getElementById().addEventListener('ended',myHandler,false);
    function myHandler(e) {
        alert('Video finalizado')
    }
</script>
--}}

<script type="text/javascript">
$(".player").bind('ended', function(){
       // done playing
       let exercise = document.querySelector('.player').dataset.user;
        exercise = JSON.parse(exercise);
        console.log(exercise);
        location.reload();
       //alert("Player stopped");
});
</script>

<script type='text/javascript'>
    document.getElementById('myVideo').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        alert('Video finalizado')
    }
</script>
<script>
    document.getElementById("link").addEventListener("click", function(){
    const ventana = window.open("https://google.com.pe","_blank");
    setTimeout(function(){
        ventana.close();
    }, 5);
});
</script>
<script>
    function prueba(){
        alert('HoliwisGGG')
    }
</script>
<script>
    $("#myButton").click(function(){
    $(this).toggleClass("btn-outline-danger btn-danger");
    });
</script>
<script> 
    var video = document.getElementById("videoPlayer");
    function playPause() { 
        if (video.paused) 
            video.play(); 
        else 
            video.pause(); 
    }
    function reload() { 
       video.load(); 
    }
    function makeLarge() { 
        video.width = 1000; 
    }
    function makeSmall() { 
        video.width = 250; 
    } 
    function makeNormal() { 
        video.width = 500; 
    } 
    </script>
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.4')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/js/pages/crud/datatables/basic/headers-r-solicitudes.js?v=7.0.4')}}"></script>
    <!--begin::Page Scripts(used by providers page)-->
    <script src="{{asset('assets/js/pages/widgets.js?v=7.0.4')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
{{--@section('classes')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Custom Styles(used by providers page)-->
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
@endsection

@extends('master')

@section('content')
<div class="container">
    <h3>Ejercicios</h3>
@foreach ($exercise as $ex)
    <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">               
           

            <!--begin::Card-->
            <div class="card card-custom">

                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">{{$ex->exercise_name}}</h3>
                    </div>
                    <div class="card-toolbar">
                        
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body" style="overflow: hidden">
                <!--begin::Button-->
                    <div >
                        <video width="520" height="250" controls>
                            <source src="{{'http://localhost/RehabilitacionApp/public'.$ex->exercise_path}}" type="video/mp4">
                            Tu navegador no soporta los vídeos de HTML5
                        </video>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection

@section('scripts')
<script> 
    var video = document.getElementById("videoPlayer");
    function playPause() { 
        if (video.paused) 
            video.play(); 
        else 
            video.pause(); 
    }
    function reload() { 
       video.load(); 
    }
    function makeLarge() { 
        video.width = 1000; 
    }
    function makeSmall() { 
        video.width = 250; 
    } 
    function makeNormal() { 
        video.width = 500; 
    } 
    </script>
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.4')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/js/pages/crud/datatables/basic/headers-r-solicitudes.js?v=7.0.4')}}"></script>
    <!--begin::Page Scripts(used by providers page)-->
    <script src="{{asset('assets/js/pages/widgets.js?v=7.0.4')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
--}}