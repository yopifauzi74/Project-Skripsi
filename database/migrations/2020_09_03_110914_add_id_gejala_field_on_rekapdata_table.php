<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdGejalaFieldOnRekapdataTable extends Migration
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
            $table->integer('id_gejala')->unsigned()->nullable()->after('id_gangguan_gizi');
            $table->foreign('id_gejala')->references('id')->on('rekap_data');
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
            $table->dropColumn('id_gejala');
        });
    }
}
