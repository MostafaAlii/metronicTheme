@extends('dashboard.layouts.master')
@push('css')
<link href="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
    type="text/css" />
@endpush
@section('title', 'M Users Managment')

@section('content')
<div class="card-body py-3">
    <!--begin::Table container-->
    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
        {!! $dataTable->table() !!}
    
    </table>
</div>
<!--end::Modals-->
@push('js')
{!! $dataTable->scripts() !!}
@endpush
@endsection