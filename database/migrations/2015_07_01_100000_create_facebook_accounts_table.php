<?php

use Illuminate\Database\Migrations\Migration;

class CreateFacebookAccountsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: facebook_accounts
         */
        Schema::create('facebook_accounts', function ($table) {
            $table->increments('id');
            $table->string('username', 255)->nullable();
            $table->string('password', 50)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('access_token', 50)->nullable();
            $table->text('cookies')->nullable();
            $table->string('faid', 50)->nullable();
            $table->string('birthday', 50)->nullable();
            $table->string('phone_number', 50)->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('facebook_accounts');
    }
}
