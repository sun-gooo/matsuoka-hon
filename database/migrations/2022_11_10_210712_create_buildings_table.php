<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();

            $table->string('build_num');
            $table->string('build_name');
            $table->string('build_name_kana');
            $table->boolean('visible_flg');
            $table->string('zipcode')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->float('latitude',10,7)->nullable();
            $table->float('longitude',10,7)->nullable();
            $table->text('map_url')->nullable();
            $table->text('appeal_point')->nullable();
            $table->biginteger('build_type')->nullable();
            $table->biginteger('structure_type')->nullable();
            $table->integer('total_unit')->nullable();
            $table->integer('chijo_num')->nullable();
            $table->integer('chika_num')->nullable();
            $table->date('build_date')->nullable();
            $table->date('nyukyo_enable_date')->nullable();
            $table->string('nearest_line1')->nullable();
            $table->string('nearest_station1')->nullable();
            $table->integer('station_distance1')->nullable();
            $table->integer('station_time1')->nullable();
            $table->string('nearest_busstop1')->nullable();
            $table->integer('busstop_distance1')->nullable();
            $table->integer('busstop_time1')->nullable();
            $table->string('nearest_line2')->nullable();
            $table->string('nearest_station2')->nullable();
            $table->integer('station_distance2')->nullable();
            $table->integer('station_time2')->nullable();
            $table->string('nearest_busstop2')->nullable();
            $table->integer('busstop_distance2')->nullable();
            $table->integer('busstop_time2')->nullable();
            $table->decimal('shikikin_init')->nullable();
            $table->integer('shikikin_tani_init')->nullable();
            $table->decimal('reikin_init')->nullable();
            $table->integer('reikin_tani_init')->nullable();
            $table->integer('kenrikin_type')->nullable();
            $table->decimal('kenrikin_init')->nullable();
            $table->integer('kenrikin_tani_init')->nullable();
            $table->decimal('hoshokin_init')->nullable();
            $table->integer('hoshokin_tani_init')->nullable();
            $table->decimal('kaiyakubiki_init')->nullable();
            $table->integer('kaiyakubiki_tani_init')->nullable();
            $table->integer('shokyaku_type')->nullable();
            $table->decimal('shokyaku_init')->nullable();
            $table->integer('shokyaku_tani_init')->nullable();
            $table->boolean('renewal_flg')->nullable();
            $table->decimal('renewal_fee')->nullable();
            $table->integer('renewal_tani')->nullable();
            $table->integer('parking_type')->nullable();
            $table->integer('parking_distance')->nullable();
            $table->integer('parking_num')->nullable();
            $table->integer('parking_fee_type')->nullable();
            $table->integer('parking_fee')->nullable();
            $table->integer('parking_tax_type')->nullable();
            $table->text('nyukyo_joken')->nullable();
            $table->text('nyukyo_etc')->nullable();
            $table->boolean('hoshonin_flg')->nullable();
            $table->integer('hosho_type')->nullable();
            $table->string('hosho_company_name')->nullable();
            $table->decimal('hosho_fee')->nullable();
            $table->integer('hosho_tani')->nullable();
            $table->integer('hosho_tax')->nullable();
            $table->text('hosho_riyo_biko')->nullable();
            $table->text('building_biko')->nullable();
            $table->text('otoku_info')->nullable();
            $table->text('etc_cost')->nullable();
            $table->text('hoken_kanyu_flg')->nullable();
            $table->text('biko1')->nullable();
            $table->text('biko2')->nullable();
            $table->text('biko3')->nullable();
            $table->text('biko4')->nullable();
            $table->text('biko5')->nullable();
            $table->text('biko6')->nullable();
            $table->text('biko7')->nullable();
            $table->text('biko8')->nullable();
            $table->text('biko9')->nullable();
            $table->text('biko10')->nullable();
            $table->text('biko11')->nullable();
            $table->text('biko12')->nullable();
            $table->text('biko13')->nullable();
            $table->text('biko14')->nullable();
            $table->text('biko15')->nullable();
            $table->text('biko16')->nullable();
            $table->text('biko17')->nullable();
            $table->text('biko18')->nullable();
            $table->text('biko19')->nullable();
            $table->text('biko20')->nullable();

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
        Schema::dropIfExists('buildings');
    }
}
