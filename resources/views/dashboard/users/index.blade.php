@extends('dashboard.layouts.master')
@push('css')
@endpush
@section('title', 'Users')

@section('content')
<div class="card-body py-3">
    <!--begin::Table container-->
            {!! $dataTable->table(['table-responsive table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4']) !!}
        <!--end::Table-->
</div>
<!--end::Modals-->
@push('js')
{!! $dataTable->scripts() !!}
@endpush
@endsection

