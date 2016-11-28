<?php

namespace Fbaccount\Fbaccount\Http\Controllers;

use App\Http\Controllers\UserController as UserController;
use Former;
use Fbaccount\Fbaccount\Http\Requests\FacebookAccountUserRequest;
use Fbaccount\Fbaccount\Interfaces\FacebookAccountRepositoryInterface;
use Response;
use User;

class FacebookAccountUserController extends UserController
{
    /**
     * Initialize facebook_account controller.
     *
     * @param type FacebookAccountRepositoryInterface $facebook_account
     *
     * @return type
     */
    public function __construct(FacebookAccountRepositoryInterface $facebook_account)
    {
        $this->model = $facebook_account;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(FacebookAccountUserRequest $request)
    {
        $facebook_accounts = $this->model->all();

        $this->theme->prependTitle(trans('fbaccount::facebook_account.names').' :: ');

        return $this->theme->of('fbaccount::user.facebook_account.index', compact('facebook_accounts'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(FacebookAccountUserRequest $request, $role, $id)
    {
        $facebook_account = $this->model->find($id);

        return $this->theme->of('fbaccount::user.facebook_account.show', compact('facebook_account'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(FacebookAccountUserRequest $request)
    {
        $facebook_account = $this->model->findOrNew(0);

        Former::populate($facebook_account);

        return $this->theme->of('fbaccount::user.facebook_account.create', compact('facebook_account'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(FacebookAccountUserRequest $request)
    {
        try {
            $attributes = $request->all();
            $facebook_account = $this->model->create($attributes);

            return $this->success(trans('messages.success.created', ['Module' => trans('fbaccount::facebook_account.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function edit(FacebookAccountUserRequest $request, $role, $id)
    {
        $facebook_account = $this->model->find($id);

        Former::populate($facebook_account);

        return $this->theme->of('fbaccount::user.facebook_account.edit', compact('facebook_account'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(FacebookAccountUserRequest $request, $role, $id)
    {
        try {
            $attributes = $request->all();
            $facebook_account = $this->model->update($attributes, $id);

            return $this->success(trans('messages.success.updated', ['Module' => trans('fbaccount::facebook_account.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(FacebookAccountUserRequest $request, $role, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('fbaccount::facebook_account.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
