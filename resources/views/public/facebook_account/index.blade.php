<div class="row">
  <div class="col-md-12">
    @forelse($facebook_accounts as $facebook_account)
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="id">
                {!! trans('fbaccount::facebook_account.label.id') !!}
              </label><br />
              {!! $facebook_account['id'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="username">
                {!! trans('fbaccount::facebook_account.label.username') !!}
              </label><br />
              {!! $facebook_account['username'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="password">
                {!! trans('fbaccount::facebook_account.label.password') !!}
              </label><br />
              {!! $facebook_account['password'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="name">
                {!! trans('fbaccount::facebook_account.label.name') !!}
              </label><br />
              {!! $facebook_account['name'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="access_token">
                {!! trans('fbaccount::facebook_account.label.access_token') !!}
              </label><br />
              {!! $facebook_account['access_token'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="cookies">
                {!! trans('fbaccount::facebook_account.label.cookies') !!}
              </label><br />
              {!! $facebook_account['cookies'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="faid">
                {!! trans('fbaccount::facebook_account.label.faid') !!}
              </label><br />
              {!! $facebook_account['faid'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="birthday">
                {!! trans('fbaccount::facebook_account.label.birthday') !!}
              </label><br />
              {!! $facebook_account['birthday'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="phone_number">
                {!! trans('fbaccount::facebook_account.label.phone_number') !!}
              </label><br />
              {!! $facebook_account['phone_number'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="user_id">
                {!! trans('fbaccount::facebook_account.label.user_id') !!}
              </label><br />
              {!! $facebook_account['user_id'] !!}
         </div>
      </div>
[<a href='/fbaccount/facebook_account/{{ $facebook_account['slug'] }}'>View</a>]
<hr>
    @empty
    <p>No facebook_accounts</p>
    @endif
  </div>
</div>