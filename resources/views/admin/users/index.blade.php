@extends('layouts.master')
@section('title')
    @lang('translation.Dashboard')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            IACT
        @endslot
        @slot('title')
            Welcome !
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Manage Users</div>
                <div class="card-body">
                    {{ $dataTable->table(['class' => 'table table-bordered table-hover table-striped']) }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.0/js/dataTables.bootstrap5.min.js"></script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
