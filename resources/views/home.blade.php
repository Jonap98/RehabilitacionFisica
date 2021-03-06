@section('classes')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Custom Styles(used by providers page)-->
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
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
                                <th>Accion1</th>
                            {{--@foreach ($campos as $th)
                                <th scope="col">{{ $th }}</th>                  
                            @endforeach --}}
                        </thead>
                        <tbody>
                            @foreach ($therapy as $t)
                            {{--<form class="form" action="{{action('ExerciseController@storeExercise')}}" method="post">--}}

                            <tr scope="row">
                                <td>{{$t->therapy_id}}</td>
                                <td class="dtr-control sorting_1" tabindex="0">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light-primary" flex-shrink-0="">
                                            <div class="symbol-label font-size-h5">{{strtoupper(substr($t->name,0,1))}}</div>
                                        </div>
                                        <div class="ml-3">
                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{$t->name}}</span>
                                        <span class="text-muted">{{$t->therapy_name}} </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{action('ExerciseController@selectionExercise', $t->id)}}">
                                        {{ csrf_field() }}
                                        <button type="submit"  class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                        <input type="hidden" name="id_therapy" value="{{$t->therapy_id}}">
                                            {{"Enviar"}} 
                                        </button>
                                    </form>
                                </td>
                                    
                                    {{--<td><a href="{{action('ExerciseController@selectionExercise', $t->id)}}" class="btn btn-sm btn-success font-weight-bolder  ">Programar rutina</a></td>--}}
                                    
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
@endsection

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
@endsection



{{--@section('clases')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Custom Styles(used by providers page)-->
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
@endsection

@extends('master')

@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Terapias</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Ingresa los datos y después da clic en enviar</span>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-body p-0">
                    <div class="wizard wizard-1" id="kt_projects_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <div class="kt-grid__item">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <!--begin::Detalles generales-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                            <h3 class="wizard-title"><strong>Crear tipo de terapia</strong></h3>
                                    </div>                                  
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                        </div>
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-7">
                                <div id="app">
                                    <!--begin::Form Wizard-->
                                <form class="form" action="{{action('TherapyController@storeTherapy')}}" method="post" enctype="multipart/form-data">
                                        
                                        {{ csrf_field() }}
                                        <div id="main">
                                            <!--Pasos-->
                                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">    
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Nombre</label>
                                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                                <input  class="form-control form-control-solid" name="name" type="text" />
                                                            </div>
                                                        </div>
                                                            <div class="form-group-row">
                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Imagen</label>
                                                                <div class="custom-file col-lg-6 col-md-9 col-sm-12">
                                                                    <input type="file" name="image" id="" accept="image/jpeg,image/png" class="custom-file-input" id="customFile"/>
                                                                    <label for="image" class="custom-file-label ">
                                                                    <br>
                                                                    @error('image')
                                                                        <small class="text-danger">{{$message}}</small>
                                                                    @enderror
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <!--
                                                        <div class="form-group row">
                                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Nombre</label>
                                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                                <input  class="form-control form-control-solid" name="image" type="text" />
                                                            </div>                                                                                   
                                                        </div>
                                                        -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button @click.prevent="postForm" :disabled="submitted" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                                        <i class="fa fa-spinner fa-pulse fa-fw" v-if="submitted"></i>  
                                                        {{"Cancelar"}} 
                                                    </button>
                                                    <button type="submit"  class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                                        <i class="fa fa-spinner fa-pulse fa-fw" v-if="submitted"></i>  
                                                        {{"Enviar"}} 
                                                    </button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

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
@endsection
--}}