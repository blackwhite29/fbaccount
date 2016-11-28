<div class='col-md-4 col-sm-6'>
                       {!! Former::text('username')
                       -> label(trans('fbaccount::facebook_account.label.username'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.username'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::password('password')
                       -> label(trans('fbaccount::facebook_account.label.password'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.password'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('name')
                       -> label(trans('fbaccount::facebook_account.label.name'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('access_token')
                       -> label(trans('fbaccount::facebook_account.label.access_token'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.access_token'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('cookies')
                       -> label(trans('fbaccount::facebook_account.label.cookies'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.cookies'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('faid')
                       -> label(trans('fbaccount::facebook_account.label.faid'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.faid'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='birthday' class='control-label'>{!!trans('fbaccount::facebook_account.label.birthday')!!}</label>
                     <div class='input-group date date-picker'>
                        {!! Former::date('birthday')
                        -> placeholder(trans('fbaccount::facebook_account.placeholder.birthday'))
                        -> dataDateFormat('D MMM YYYY')
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('phone_number')
                       -> label(trans('fbaccount::facebook_account.label.phone_number'))
                       -> placeholder(trans('fbaccount::facebook_account.placeholder.phone_number'))!!}
                </div>