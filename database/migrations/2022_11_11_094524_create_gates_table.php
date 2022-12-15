<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gates', function (Blueprint $table) {
            $table->id();
            $table->string('gate_name');
            $table->integer('sort_num');
            $table->float('latitude',10,7)->nullable();
            $table->float('longitude',10,7)->nullable();
            $table->text('biko1')->nullable();
            $table->text('biko2')->nullable();
            $table->text('biko3')->nullable();
            $table->text('biko4')->nullable();
            $table->text('biko5')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gates');
    }
}
