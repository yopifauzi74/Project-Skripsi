<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsiaKehamilanFieldOnPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //php
        Schema::table('pasiens', function(Blueprint $table){
            $table->string('usia_kehamilan')->nullable()->after('kd_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pasiens', function(Blueprint $table){
            $table->dropColumn('usia_kehamilan');
        });
    }
}
