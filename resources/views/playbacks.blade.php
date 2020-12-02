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
<div class="card-title">
    <h3 class="card-label">Reproducciones
</div>

<div class="card card-custom gutter-b">
    <div class="card-body">
        <div class="card-body" style="overflow: hidden">
            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" >
                <thead>
                    <th>Sesión</th>
                    <th>Ejercicio</th>
                    <th>Id reproducción</th>
                    <th></th>
                    <th>Inicio de sesión</th>
                    <th>Reproducción del ejercicio</th>
                </thead>
                <tbody>
                    @foreach ($playB as $play)
                        <tr scope="row">
                            <td>{{$play->access_id}}</td>
                            <td>{{$play->exercise_name}}</td>
                            <td align="center">{{$play->playback_id}}</td>
                            <td></td>
                            <td><span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text">{{date('d-M-Y, h:i A', strtotime($play->access_created_at))}}</span></td>
                            <td><span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">{{date('d-M-Y, h:i A', strtotime($play->playback_created_at))}}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div>

@section('scripts')
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/crud/datatables/basic/scrollable.js?v=7.0.4')}}"></script>
<!--end::Page Scripts-->
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.4')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/js/pages/crud/datatables/basic/headers-r-solicitudes.js?v=7.0.4')}}"></script>
    <!--begin::Page Scripts(used by providers page)-->
    <script src="{{asset('assets/js/pages/widgets.js?v=7.0.4')}}"></script>
@endsection