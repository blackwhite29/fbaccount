@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('fbaccount::facebook_account.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('fbaccount::facebook_account.names') !!}</small>
@stop

@section('title')
{!! trans('fbaccount::facebook_account.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="http://www.lavalite.org/admin"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('fbaccount::facebook_account.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-facebook_account'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('fbaccount::facebook_account.label.username')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.password')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.name')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.access_token')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.cookies')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.faid')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.birthday')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.phone_number')!!}</th>
    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-facebook_account').load('{!!URL::to('admin/fbaccount/facebook_account/0')!!}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{!! URL::to('/admin/fbaccount/facebook_account') !!}',
        "columns": [
            {data :'username'},
                    {data :'password'},
                    {data :'name'},
                    {data :'access_token'},
                    {data :'cookies'},
                    {data :'faid'},
                    {data :'birthday'},
                    {data :'phone_number'},
        ],
        "facebook_accountLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-facebook_account').load('{!!URL::to('admin/fbaccount/facebook_account')!!}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop