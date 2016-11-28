<?php

namespace Fbaccount\Fbaccount\Repositories\Eloquent;

use Fbaccount\Fbaccount\Interfaces\FacebookAccountRepositoryInterface;

class FacebookAccountRepository extends BaseRepository implements FacebookAccountRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('fbaccount.facebook_account.model');
    }
}
