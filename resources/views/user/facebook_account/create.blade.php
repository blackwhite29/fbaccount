{!!Former::horizontal_open()
->id('create-fbaccount-facebook_account')
->method('POST')
->files('true')
->action(URL::to('user/fbaccount/facebook_account'))!!}
@include('fbaccount::user.facebook_account.partial.entry')
{!! Former::close() !!}