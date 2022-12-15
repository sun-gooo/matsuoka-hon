<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_photos', function (Blueprint $table) {
            $table->biginteger('id');
            $table->biginteger('build_id');
            $table->integer('sort_num')->nullable();
            $table->string('category_name')->nullable();
            $table->string('file_name')->nullable();
            $table->string('photo_comment')->nullable();
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
        Schema::dropIfExists('building_photos');
    }
}
