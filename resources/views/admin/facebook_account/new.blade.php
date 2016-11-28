<div class="box-header with-border">
    <h3 class="box-title">  {!! trans('fbaccount::facebook_account.names') !!}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-new-facebook_account"><i class="fa fa-plus-circle"></i> New </button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
            <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title=""  id="btn-new-facebook_account-icn">
            <span class="badge bg-purple">{!! Fbaccount::count('facebook_account') !!}</span>
            <i class="fa fa-plus-circle  fa-3x"></i>
            {{ trans('cms.create') }} {!! trans('fbaccount::facebook_account.name') !!}
            </button>
            <br>{!! trans('fbaccount::facebook_account.text.preview') !!}
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#btn-new-facebook_account, #btn-new-facebook_account-icn').click(function(){
        $('#entry-facebook_account').load('{!!URL::to('admin/fbaccount/facebook_account/create')!!}');
    });
});
</script>