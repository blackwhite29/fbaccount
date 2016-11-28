<?php

namespace Fbaccount\Fbaccount;

use DB;
use Illuminate\Database\Seeder;

class FacebookAccountTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('facebook_accounts')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'name'          => 'fbaccount.facebook_account.view',
                'readable_name' => 'View FacebookAccount',
            ],
            [
                'name'          => 'fbaccount.facebook_account.create',
                'readable_name' => 'Create FacebookAccount',
            ],
            [
                'name'          => 'fbaccount.facebook_account.edit',
                'readable_name' => 'Update FacebookAccount',
            ],
            [
                'name'          => 'fbaccount.facebook_account.delete',
                'readable_name' => 'Delete FacebookAccount',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'key'      => 'fbaccount.facebook_account.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ],
            */
        ]);
    }
}
