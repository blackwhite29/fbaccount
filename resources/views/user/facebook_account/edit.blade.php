{!!Former::horizontal_open()
->id('edit-fbaccount-facebook_account')
->method('PUT')
->files('true')
->action(URL::to('user/fbaccount/facebook_account') .'/'.$facebook_account['eid'])!!}
@include('fbaccount::user.facebook_account.partial.entry')
{!! Former::close() !!}