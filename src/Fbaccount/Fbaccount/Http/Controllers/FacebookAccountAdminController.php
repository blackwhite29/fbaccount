<?php

namespace Fbaccount\Fbaccount\Http\Controllers;

use App\Http\Controllers\AdminController as AdminController;
use Former;
use Fbaccount\Fbaccount\Http\Requests\FacebookAccountAdminRequest;
use Fbaccount\Fbaccount\Interfaces\FacebookAccountRepositoryInterface;
use Response;

/**
 * Admin controller class.
 */
class FacebookAccountAdminController extends AdminController
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
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(FacebookAccountAdminRequest $request)
    {
        if ($request->wantsJson()) {
            $array = $this->model->json();
            foreach ($array as $key => $row) {
                $array[$key] = array_only($row, config('fbaccount.facebook_account.listfields'));
            }

            return ['data' => $array];
        }

        $this->theme->prependTitle(trans('fbaccount::facebook_account.names').' :: ');

        return $this->theme->of('fbaccount::admin.facebook_account.index')->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(FacebookAccountAdminRequest $request, $id)
    {
        $facebook_account = $this->model->find($id);

        if (empty($facebook_account)) {
            if ($request->wantsJson()) {
                return [];
            }

            return view('fbaccount::admin.facebook_account.new');
        }

        if ($request->wantsJson()) {
            return $facebook_account;
        }

        Former::populate($facebook_account);

        return view('fbaccount::admin.facebook_account.show', compact('facebook_account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(FacebookAccountAdminRequest $request)
    {
        $facebook_account = $this->model->findOrNew(0);
        Former::populate($facebook_account);

        return view('fbaccount::admin.facebook_account.create', compact('facebook_account'));
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(FacebookAccountAdminRequest $request)
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
    public function edit(FacebookAccountAdminRequest $request, $id)
    {
        $facebook_account = $this->model->find($id);

        Former::populate($facebook_account);

        return view('fbaccount::admin.facebook_account.edit', compact('facebook_account'));
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(FacebookAccountAdminRequest $request, $id)
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
    public function destroy(FacebookAccountAdminRequest $request, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('fbaccount::facebook_account.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
