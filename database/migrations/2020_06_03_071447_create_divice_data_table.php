<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiviceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divice_data', function (Blueprint $table) {
            $table->id();
            $table->string('DevID');
            $table->string('distance')->nullable();
            $table->string('gas1');
            $table->string('gas2');
            $table->string('gas3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divice_data');
    }
}
