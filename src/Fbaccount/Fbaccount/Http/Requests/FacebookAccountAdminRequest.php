<?php

namespace Fbaccount\Fbaccount\Http\Requests;

use App\Http\Requests\Request;
use User;

class FacebookAccountAdminRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(\Illuminate\Http\Request $request)
    {
        // Determine if the user is authorized to create an entry,
        if ($request->isMethod('POST') || $request->is('*/create')) {
            return User::can('fbaccount.facebook_account.create');
        }

        // Determine if the user is authorized to update an entry,
        if ($request->isMethod('PUT') || $request->isMethod('PATCH') || $request->is('*/edit')) {
            return User::can('fbaccount.facebook_account.edit');
        }

        // Determine if the user is authorized to delete an entry,
        if ($request->isMethod('DELETE')) {
            return User::can('fbaccount.facebook_account.delete');
        }

        // Determine if the user is authorized to view the module.
        return User::can('fbaccount.facebook_account.view');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(\Illuminate\Http\Request $request)
    {
        // validation rule for create request.
        if ($request->isMethod('POST')) {
            return [
                'username'            => 'required',
                'password'            => 'required',
                'access_token'        => 'required',
            ];
        }

        // Validation rule for update request.
        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            return [
                'username'            => 'required',
                'password'            => 'required',
                'access_token'        => 'required',
            ];
        }

        // Default validation rule.
        return [

        ];
    }
}
