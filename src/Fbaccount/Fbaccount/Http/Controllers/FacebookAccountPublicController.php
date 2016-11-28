<?php

namespace Fbaccount\Fbaccount\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Fbaccount\Fbaccount\Interfaces\FacebookAccountRepositoryInterface;

class FacebookAccountPublicController extends CMSPublicController
{
    /**
     * Constructor.
     *
     * @param type \Fbaccount\FacebookAccount\Interfaces\FacebookAccountRepositoryInterface $facebook_account
     *
     * @return type
     */
    public function __construct(FacebookAccountRepositoryInterface $facebook_account)
    {
        $this->model = $facebook_account;
        parent::__construct();
    }

    /**
     * Show facebook_account's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $facebook_accounts = $this->model->all();

        return $this->theme->of('fbaccount::public.facebook_account.index', compact('facebook_accounts'))->render();
    }

    /**
     * Show facebook_account.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $facebook_account = $this->model->findBySlug($slug);

        return $this->theme->of('fbaccount::public.facebook_account.show', compact('facebook_account'))->render();
    }
}
