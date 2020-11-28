@section('classes')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Custom Styles(used by providers page)-->
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Page Vendors Styles(used by this page)-->
	<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel=stylesheet>
@endsection

@extends('master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card-title">
                <h3 class="card-label">Monitoreo global
            </div>
            
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <!--begin::Details-->
                    <div class="d-flex mb-9">
                        @foreach ($user as $usr)
                        <!--begin: Pic-->
                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                            <div class="symbol symbol-50 symbol-light-primary" flex-shrink-0="">
                                <div class="symbol-label font-size-h5">{{strtoupper(substr($usr->name,0,1))}}{{strtoupper(substr($usr->paterno,0,1))}}</div>
                                {{--<div class="symbol-label font-size-h5">{{strtoupper(substr($usr->name,0,1))}}{{strtoupper(substr($usr->paterno,0,1))}}</div>--}}
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between flex-wrap mt-1">
                                <div class="d-flex mr-3">
                                    <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{$usr->name}} {{$usr->paterno}} {{$usr->materno}}</a>
                                    <a href="#">
                                        <i class="flaticon2-correct text-success font-size-h5"></i>
                                    </a>
                                </div>
                                <div class="my-lg-0 my-3">
                                    <!--<a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">ask</a>
                                    <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase">hire</a>-->
                                </div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap justify-content-between mt-1">
                                <div class="d-flex flex-column flex-grow-1 pr-8">
                                    <div class="d-flex flex-wrap mb-4">
                                    <a href="mailto:{{$usr->email}}" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        <i class="flaticon2-new-email mr-2 font-size-lg"></i>{{$usr->email}}</a>
                                        <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        <i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>Paciente</a>
                                        <!--<a href="#" class="text-dark-50 text-hover-primary font-weight-bold">
                                        <i class="flaticon2-placeholder mr-2 font-size-lg"></i>Melbourne</a>-->
                                    </div>
                                    <!--<span class="font-weight-bold text-dark-50">I distinguish three main text objectives could be merely to inform people.</span>
                                    <span class="font-weight-bold text-dark-50">A second could be persuade people.You want people to bay objective</span>-->
                                </div>
                                <!--<div class="d-flex align-items-center w-25 flex-fill float-right mt-lg-12 mt-8">
                                    <span class="font-weight-bold text-dark-75">Progress</span>
                                    <div class="progress progress-xs mx-3 w-100">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="font-weight-bolder text-dark">78%</span>
                                </div>-->
                            </div>
                            <!--end::Content-->
                        </div>
                        @endforeach
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <div class="separator separator-solid"></div>
                    <!--begin::Items-->
                    <div class="d-flex align-items-center flex-wrap mt-8">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                                <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Inicios de sesión</span>
                                <span class="font-weight-bolder font-size-h5">
                                    {{$count}}
                                </span>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                                <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Ejercicios asignados</span>
                                <span class="font-weight-bolder font-size-h5">
                                    {{$assignments}}
                                </span>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                                <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Ejercicios reproducidos</span>
                                <span class="font-weight-bolder font-size-h5">
                                    {{$playbacks}}
                                </span>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                                <i class="flaticon-file-2 display-4 text-muted font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column flex-lg-fill">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">Rutinas asignadas</span>
                                <span class="font-weight-bolder font-size-h5">
                                    {{$workouts}}
                                </span>
                            </div>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        {{--<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                                <i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                                <a href="#" class="text-primary font-weight-bolder">View</a>
                            </div>
                        </div>--}}
                        <!--end::Item-->
                        <!--begin::Item-->
                        <!--end::Item-->
                    </div>
                    <br>
                    <!--begin::Items-->
                    
                    
                </div>
            </div>
            
            <div class="card-title">
                <h3 class="card-label">Ejercicios asignados
            </div>
            
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="card-body" style="overflow: hidden">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                            <thead>
                                <th>ID Ejercicio</th>
                                    <th>Ejercicio</th>
                                    <th>Terapia</th>
                                    <th>Favorito</th>
                                    <th>Fecha de creacion del ejercicio</th>
                                    <th>Fecha de asignación</th>
                                {{--@foreach ($campos as $th)
                                    <th scope="col">{{ $th }}</th>                  
                                @endforeach --}}
                            </thead>
                            <tbody>
                                @foreach ($assignment2 as $ass2)
                                {{--<form class="form" action="{{action('ExerciseController@storeExercise')}}" method="post">--}}
    
                                <tr scope="row">
                                <td>{{$ass2->exercise_id}}</td>
                                        {{--<td class="dtr-control sorting_1" tabindex="0">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-primary" flex-shrink-0="">
                                                    <div class="symbol-label font-size-h5">MK</div>
                                                </div>
                                                <div class="ml-3">
                                                <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Milka</span>
                                                <span class="text-muted">Salazar castro</span>
                                                </div>
                                            </div></td>--}}
                                        <td>{{$ass2->exercise_name}}</td>
                                        <td>{{$ass2->therapy_name}}</td>
                                        @if ($ass2->favorite==1)
                                            <td>Es favorito</td>
                                        @else
                                            <td>No es favorito</td>
                                        @endif
                                        <td><span class="btn btn-light-warning btn-sm font-weight-bold btn-upper btn-text">{{date('d-M-Y, h:i A', strtotime($ass2->created_at))}}</span></td>
                                        <td><span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text">{{date('d-M-Y, h:i A', strtotime($ass2->assigned_at))}}</span></td>
                                        
                                            {{--<form action="{{action('AssignmentController@destroy', $ass2->assignment_id)}}" method="POST" onsubmit="return confirmarEliminar()">
                                                <input type="hidden" name="assignment_id" id="assignment_id" value="{{$ass2->assignment_id}}" hidden>
                                                <button type="submit"  class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                                
                                                    {{"Seleccionar"}} 
                                                </button>
                                            </form>--}}
                                        <!--<td><a href="#" class="btn btn-sm btn-success font-weight-bolder  ">Programar rutina</a></td>-->
                                    </tr>
                                @endforeach
                                
                                {{--
                                @foreach ($row as $campo)
                                <tr scope="row">
                                    <th >{{$campo->id}}</th>
                                    <td><div style="width: 8em">{{$campo->name}}</div></td>
                                    <td><div style="width: 15em">{{$campo->email}}</div></td>
                                    <td><div style="width: 30em">{{$campo->message}}</div></td>
                                    <td>{{$campo->created_at}}</td>
                                </tr>
                                @endforeach--}}
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                    <br>
                    <!--begin::Items-->
                    
                    
                </div>
            </div>

            <div class="card-title">
                <h3 class="card-label">Rutinas asignadas
            </div>
            
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="card-body" style="overflow: hidden">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                            <thead>
                                <th>ID Ejercicio</th>
                                    <th>Ejercicio</th>
                                    <th>Terapia</th>
                                    <th>Fecha de inicio</th>
                                    <th>Fecha de fin</th>
                                    <th>Acción</th>
                                {{--@foreach ($campos as $th)
                                    <th scope="col">{{ $th }}</th>                  
                                @endforeach --}}
                            </thead>
                            <tbody>
                                @foreach ($assignment3 as $ass3)
                                {{--<form class="form" action="{{action('ExerciseController@storeExercise')}}" method="post">--}}
    
                                <tr scope="row">
                                <td>{{$ass3->exercise_id}}</td>
                                        {{--<td class="dtr-control sorting_1" tabindex="0">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-primary" flex-shrink-0="">
                                                    <div class="symbol-label font-size-h5">MK</div>
                                                </div>
                                                <div class="ml-3">
                                                <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Milka</span>
                                                <span class="text-muted">Salazar castro</span>
                                                </div>
                                            </div></td>--}}
                                        <td>{{$ass3->exercise_name}}</td>
                                        <td>{{$ass3->therapy_name}}</td>
                                        <td><span class="btn btn-light-warning btn-sm font-weight-bold btn-upper btn-text">{{date('d-M-Y', strtotime($ass3->initial_date))}}</span></td>
                                        <td><span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text">{{date('d-M-Y', strtotime($ass3->end_date))}}</span></td>
                                        <td></td>
                                            {{--<form action="{{action('AssignmentController@destroy', $ass2->assignment_id)}}" method="POST" onsubmit="return confirmarEliminar()">
                                                <input type="hidden" name="assignment_id" id="assignment_id" value="{{$ass2->assignment_id}}" hidden>
                                                <button type="submit"  class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                                
                                                    {{"Seleccionar"}} 
                                                </button>
                                            </form>--}}
                                        <!--<td><a href="#" class="btn btn-sm btn-success font-weight-bolder  ">Programar rutina</a></td>-->
                                    </tr>
                                @endforeach
                                
                                {{--
                                @foreach ($row as $campo)
                                <tr scope="row">
                                    <th >{{$campo->id}}</th>
                                    <td><div style="width: 8em">{{$campo->name}}</div></td>
                                    <td><div style="width: 15em">{{$campo->email}}</div></td>
                                    <td><div style="width: 30em">{{$campo->message}}</div></td>
                                    <td>{{$campo->created_at}}</td>
                                </tr>
                                @endforeach--}}
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                    <br>
                    <!--begin::Items-->
                    
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.4')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/js/pages/crud/datatables/basic/headers-r-solicitudes.js?v=7.0.4')}}"></script>
    <!--begin::Page Scripts(used by providers page)-->
    <script src="{{asset('assets/js/pages/widgets.js?v=7.0.4')}}"></script>
<script>
    function confirmarEliminar()
        {
        var x = confirm("¿Estas seguro de Eliminar?");
        if (x)
            return true;
        else
            return false;
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
    
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection