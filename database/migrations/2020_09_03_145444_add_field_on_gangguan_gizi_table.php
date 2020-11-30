<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldOnGangguanGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('gangguan_gizis', function(Blueprint $table){
            $table->string('kode')->nullable()->after('id');
            $table->string('nama_diagnosa')->nullable()->after('kode');
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
        Schema::table('gangguan_gizis', function(Blueprint $table){
            $table->dropColumn('kode');
            $table->dropColumn('nama_diagnosa');
        });
    }
}
