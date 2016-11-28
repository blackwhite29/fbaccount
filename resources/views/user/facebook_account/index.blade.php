[<a href="/user/fbaccount/facebook_account/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('fbaccount::facebook_account.label.username')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.password')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.name')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.access_token')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.cookies')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.faid')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.birthday')!!}</th>
                    <th>{!! trans('fbaccount::facebook_account.label.phone_number')!!}</th>
        <td>Action</td>
    </thead>
    <tbody>
        @foreach($facebook_accounts as $facebook_account)
        <tr>
            <td><a href="/user/fbaccount/facebook_account/{!! $facebook_account->eid !!}"> {!! $facebook_account->id !!} </a></td>
            <td>{{ $facebook_account->username }}</td>
                    <td>{{ $facebook_account->password }}</td>
                    <td>{{ $facebook_account->name }}</td>
                    <td>{{ $facebook_account->access_token }}</td>
                    <td>{{ $facebook_account->cookies }}</td>
                    <td>{{ $facebook_account->faid }}</td>
                    <td>{{ $facebook_account->birthday }}</td>
                    <td>{{ $facebook_account->phone_number }}</td>
            <td>
                <a href="/user/fbaccount/facebook_account/{!! $facebook_account->eid !!}/edit"> Edit </a>
                <a href="/user/fbaccount/facebook_account/{!! $facebook_account->eid !!}" class="link-delete"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
    $('.link-delete').click(function(e){
        var url = $(this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: url,
                type: 'DELETE',
                processData: false,
                contentType: false,
                success:function(data, textStatus, jqXHR)
                {
                    data = jQuery.parseJSON(data);
                    window.location = data.redirect;
                },
            });
        });
        e.preventDefault();
    });
});
</script>