@extends('backend.layouts.app')

@section('title', $menu.' | ')

@section('content')
<section class="content-header">
    <h1>{!! $menu !!}</h1>
    {!! $breadcrumb !!}
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-striped table-bordered table-datatables" width="100%">
                <thead>
                    <tr>
                        <th>{!! trans('label.no') !!}</th>
                        <th>{!! trans('label.role') !!}</th>
                        <th>{!! trans('label.name') !!}</th>
                        <th>{!! trans('label.email') !!}</th>
                        <th>{!! trans('label.join_date') !!}</th>
                        <th>{!! trans('label.status') !!}</th>
                        <th>{!! trans('label.action') !!}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
    $(function(){
        $('.table-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route($route.".datatables") !!}',
            columns: [
                {data: 'no', searchable: false, width: '5%', className: 'center'},
                {data: 'role'},
                {data: 'name'},
                {data: 'email'},
                {data: 'join_date'},
                {data: 'active'},
                {data: 'action', orderable: false, searchable: false, width: '15%', className: 'center action'},
            ],
            drawCallback: function(){
                INIT.tooltip();
            },
        });
    });
</script>
@endpush