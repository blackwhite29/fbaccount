<?php

return [
/*
* Provider .
*/
'provider'  => 'fbaccount',

/*
* Package .
*/
'package'   => 'fbaccount',

/*
* Modules .
*/
'modules'   => ['facebook_account'],

'facebook_account' => [
                    'Name'          => 'FacebookAccount',
                    'name'          => 'facebook_account',
                    'table'         => 'facebook_accounts',
                    'model'         => 'Fbaccount\Fbaccount\Models\FacebookAccount',
                    'image'         => [
                        'xs'        => ['width' => '60',         'height' => '45'],
                        'sm'        => ['width' => '100',        'height' => '75'],
                        'md'        => ['width' => '460',        'height' => '345'],
                        'lg'        => ['width' => '800',        'height' => '600'],
                        'xl'        => ['width' => '1000',       'height' => '750'],
                        ],

                    'fillable'          => ['user_id', 'id',  'username',  'password',  'name',  'access_token',  'cookies',  'faid',  'birthday',  'phone_number',  'user_id'],
                    'listfields'        => ['id', 'id',  'username',  'password',  'name',  'access_token',  'cookies',  'faid',  'birthday',  'phone_number',  'user_id'],
                    'translatable'      => ['id',  'username',  'password',  'name',  'access_token',  'cookies',  'faid',  'birthday',  'phone_number',  'user_id'],

                    'upload-folder'     => '/uploads/fbaccount/facebook_account',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
];
