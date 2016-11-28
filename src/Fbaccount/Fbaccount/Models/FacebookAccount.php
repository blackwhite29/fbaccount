<?php

namespace Fbaccount\Fbaccount\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lavalite\Filer\FilerTrait;

class FacebookAccount extends Model
{
    use FilerTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable = config('fbaccount.facebook_account.fillable');
        $this->uploads = config('fbaccount.facebook_account.uploadable');
        $this->uploadRootFolder = config('fbaccount.facebook_account.upload_root_folder');
        $this->table = config('fbaccount.facebook_account.table');
    }
}
