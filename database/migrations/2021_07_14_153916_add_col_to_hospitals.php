<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColToHospitals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hospitals', function (Blueprint $table) {
            //
            $table->string('address');
        });

        Schema::table('hospitals', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('hospitals', function (Blueprint $table) {
            //
            $table->text('map');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hospitals', function (Blueprint $table) {
            //
            $table->dropcolumn('address');
        });

        Schema::table('hospitals', function (Blueprint $table) {
            //
            $table->dropcolumn('city_id');
        });

        Schema::table('hospitals', function (Blueprint $table) {
            //
            $table->dropcolumn('map');
        });
    }
}
