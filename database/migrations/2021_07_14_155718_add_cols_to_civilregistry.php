<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsToCivilregistry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('civilregistry', function (Blueprint $table) {
            //
            $table->string('address');
            $table->string('phone');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('civilregistry', function (Blueprint $table) {
            //
            $table->dropcolumn('address');
            $table->dropcolumn('phone');
           
        });
    }
}
