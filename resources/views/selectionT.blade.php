@section('classes')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--begin::Page Custom Styles(used by providers page)-->
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
@endsection

@extends('master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <h3>Tipos de terapia</h3>
            <div class="row">

                @foreach ($therapy as $therap)
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
                                        <div class="symbol-label" style="overflow: hidden; justify-content: center; align-items: center;">
                                            <img src="{{'http://localhost/RehabilitacionApp/public'.$therap->therapy_image}}" alt="" style="width: 100%; height: auto;" class="rounded">
                                        </div>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Name-->
                                    <div class="my-2">
                                        <span class="text-dark font-weight-bold font-size-h4">{{$therap->therapy_name}}</span>
                                    </div>
                                    <form action="{{action('ExerciseController@selectionExercise', $therap->id)}}">
                                        {{ csrf_field() }}
                                        <button type="submit"  class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                        <input type="hidden" name="id_therapy" value="{{$therap->therapy_id}}">
                                            {{"Seleccionar"}} 
                                        </button>
                                    </form>
                                    {{--<a href="{{action('ExerciseController@selectionExercise', $therap->id)}}" class="btn btn-block btn-sm btn-success font-weight-bolder text-uppercase py-4">Programar rutina</a>--}}
                                    {{--<a href="#" class="btn btn-block btn-sm btn-primary font-weight-bolder text-uppercase py-4">Asignar ejercicio</a>
                                    <a href="#" class="btn btn-block btn-sm btn-warning font-weight-bolder text-uppercase py-4">Ver monitoreo</a>
                                    --}}
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