<?php

namespace Fbaccount\Fbaccount;

class Fbaccount
{
    /**
     * $facebook_account object.
     */
    protected $facebook_account;

    /**
     * Constructor.
     */
    public function __construct(\Fbaccount\Fbaccount\Interfaces\FacebookAccountRepositoryInterface $facebook_account)
    {
        $this->facebook_account = $facebook_account;
    }

    /**
     * Returns count of fbaccount.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }
}
