<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdGangguanGiziFieldOnRekapdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('rekap_data', function(Blueprint $table){
            $table->integer('id_gangguan_gizi')->unsigned()->nullable()->after('id_pasien');
            $table->foreign('id_gangguan_gizi')->references('id')->on('rekap_data');
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
        Schema::table('rekap_data', function(Blueprint $table){
            $table->dropColumn('id_gangguan_gizi');
        });
    }
}
