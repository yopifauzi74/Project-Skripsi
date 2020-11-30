<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdStatusKeluargaFieldOnPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pasiens', function(Blueprint $table){
            $table->integer('id_status_keluarga')->unsigned()->nullable()->after('kd_pasien');
            $table->foreign('id_status_keluarga')->references('id')->on('status_keluargas');
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
            $table->dropColumn('id_status_keluarga');
        });
    }
}
