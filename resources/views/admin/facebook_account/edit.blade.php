<div class="box-header with-border">
    <h3 class="box-title"> Edit  {!! trans('fbaccount::facebook_account.name') !!} [{!!$facebook_account->name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" id="btn-close"><i class="fa fa-times-circle"></i> cms.close</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#facebook_account" data-toggle="tab">{!! trans('fbaccount::facebook_account.tab.name') !!}</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('edit-facebook_account')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/fbaccount/facebook_account/'. $facebook_account['id']))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="facebook_account">
                @include('fbaccount::admin.facebook_account.partial.entry')
            </div>
        </div>
        {!!Former::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">

        (function ($) {
            $('#btn-close').click(function(){
                $('#entry-facebook_account').load('{!!URL::to('admin/fbaccount/facebook_account')!!}/{!!$facebook_account->id!!}');
            });

            $('#btn-save').click(function(){
                $('#edit-facebook_account').submit();
            });

            $('#edit-facebook_account')
            .submit( function( e ) {

                if($('#edit-facebook_account').valid() == false) {
                    toastr.warning({{ trans('message.unprocessable') }}, '{{ trans('cms.warning') }}');
                    return false;
                }

                var formURL  = "{!! URL::to('admin/fbaccount/facebook_account/')!!}/{!!$facebook_account->id!!}";
                $.ajax( {
                    url: formURL,
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success:function(data, textStatus, jqXHR)
                    {
                        $('#entry-facebook_account').load('{!!URL::to('admin/fbaccount/facebook_account')!!}/{!!$facebook_account->id!!}');
                        $('#main-list').DataTable().ajax.reload( null, false );
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                    }
                });
                e.preventDefault();
            });

        }(jQuery));

</script>