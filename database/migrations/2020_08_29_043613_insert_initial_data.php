<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertInitialData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('roles')->insert(
            array(
                'id' => 1,
                'code' => '0001',
                'name' => 'admin',
            )
        );

        DB::table('users')->insert(
            array(
                'id' => 1,
                'name' => 'admin',
                'password' => Hash::make('admin123'),
                'level' => '100',
                'role_id' => '1',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
