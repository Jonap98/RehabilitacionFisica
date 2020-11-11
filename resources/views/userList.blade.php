@section('clases')
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
                        <h3 class="card-label">Usuarios
                    </div>
                    <div class="card-toolbar">                    
                        <!--begin::Button-->
                       
                        
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body" style="overflow: hidden">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <th>ID</th>
                                <th>Usuario</th>
                                <th>E-mail</th>
                                <th>Accion1</th>
                                <th>Accion2</th>
                                <th>Accion3</th>
                            {{--@foreach ($campos as $th)
                                <th scope="col">{{ $th }}</th>                  
                            @endforeach --}}
                        </thead>
                        <tbody>
                            @foreach ($users as $usr)
                            {{--<form class="form" action="{{action('ExerciseController@storeExercise')}}" method="post">--}}

                            <tr scope="row">
                                <td>{{$usr->id}}</td>
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light-primary" flex-shrink-0="">
                                                <div class="symbol-label font-size-h5">{{strtoupper(substr($usr->name,0,1))}}{{strtoupper(substr($usr->paterno,0,1))}}</div>
                                            </div>
                                            <div class="ml-3">
                                            <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{$usr->name}}</span>
                                            <a href="#" class="text-muted text-hover-primary">{{$usr->paterno}} {{$usr->materno}}</a>
                                            </div>
                                        </div></td>
                                    <td>{{$usr->email}}</td>
                                    <td><a href="{{action('WorkoutController@index', $usr->id)}}" class="btn btn-sm btn-success font-weight-bolder  ">Programar rutina</a></td>
                                    <td><a href="{{action('AssignmentController@index', $usr->id)}}" class="btn btn-sm btn-primary font-weight-bolder ">Asignar ejercicio</a></td>
                                    <td><a href="#" class="btn btn-sm btn-warning font-weight-bolder ">Ver monitoreo</a></td>
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
                
            </div>
            <!--end::Card-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
{{--
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">

                @foreach ($users as $usr)
                    <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body text-center pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <!--Boton para acciones
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    -->
                                </div>
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="mt-7">
                                <div class="symbol symbol-lg-75 symbol-circle symbol-light-success">
                                <span class="font-size-h3 symbol-label font-weight-boldest">{{strtoupper(substr($usr->name,0,1))}}{{strtoupper(substr($usr->paterno,0,1))}}</span>
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Name-->
                            <div class="my-2">
                                <span class="text-dark font-weight-bold font-size-h4">{{$usr->name}}</span>
                                <span class="text-dark font-weight-bold font-size-h4">{{$usr->paterno}}</span>
                            </div>
                            <!--end::Name-->
                            <a href="#" class="btn btn-block btn-sm btn-success font-weight-bolder text-uppercase py-4">Programar rutina</a>
                            <a href="#" class="btn btn-block btn-sm btn-primary font-weight-bolder text-uppercase py-4">Asignar ejercicio</a>
                            <a href="#" class="btn btn-block btn-sm btn-warning font-weight-bolder text-uppercase py-4">Ver monitoreo</a>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                @endforeach
                

            </div>
        </div>
    </div>
</div>
--}}
@endsection

<!--Cuando no se incluye la seccion de scripts, al darle clic sobre inicio en la vista de
    movil, abre el panel de usuario. Checar funcionamiento-->

@section('scripts')
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
    <!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.4"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/datatables/basic/paginations.js?v=7.0.4"></script>
		<!--end::Page Scripts-->
@endsection