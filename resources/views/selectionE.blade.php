@section('classes')
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
                        {{--<video  class="fm-video video-js vjs-16-9" src="{{'http://localhost/RehabilitacionApp/public'.$ex->exercise_path}}"></video>--}}
                        <!--<iframe style="overflow: hidden;" src="https://www.youtube.com/embed/_XzV3ovHrNc" frameborder=0 width=510 height=400 scrolling=no allowfullscreen=allowfullscreen></iframe>-->
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