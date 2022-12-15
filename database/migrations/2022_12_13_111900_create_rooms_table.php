<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->biginteger('id');
            $table->string('build_id');
            $table->string('contact_num');
            $table->string('room_num');
            $table->integer('floor');
            $table->boolean('visible_flg')->nullable();
            $table->integer('status_code')->nullable();
            $table->integer('build_type')->nullable();
            $table->integer('structure_type')->nullable();
            $table->decimal('yachin')->nullable();
            $table->decimal('shikikin')->nullable();
            $table->integer('shikikin_tani')->nullable();
            $table->decimal('reikin')->nullable();
            $table->integer('reikin_tani')->nullable();
            $table->decimal('hoshokin')->nullable();
            $table->integer('hoshokin_tani')->nullable();
            $table->integer('kyoekihi_flg')->nullable();
            $table->decimal('kyoekihi')->nullable();
            $table->integer('kyoekihi_tani')->nullable();
            $table->decimal('kenrikin')->nullable();
            $table->integer('kenrikin_tani')->nullable();
            $table->decimal('kaiyakubiki')->nullable();
            $table->integer('kaiyakubiki_tani')->nullable();
            $table->integer('shokyaku_code')->nullable();
            $table->decimal('shokyaku')->nullable();
            $table->integer('shokyaku_tani')->nullable();
            $table->boolean('renewal_flg')->nullable();
            $table->decimal('renewal_fee')->nullable();
            $table->integer('renewal_tani')->nullable();
            $table->string('etc_fee_name1')->nullable();
            $table->decimal('etc_fee1')->nullable();
            $table->string('etc_fee_name2')->nullable();
            $table->decimal('etc_fee2')->nullable();
            $table->integer('madori_type')->nullable();
            $table->float('menseki',5,2)->nullable();
            $table->integer('houi_cd')->nullable();
            $table->integer('madori_code1')->nullable();
            $table->float('madori_josu1',5,2)->nullable();
            $table->integer('madori_code2')->nullable();
            $table->float('madori_josu2',5,2)->nullable();
            $table->integer('madori_code3')->nullable();
            $table->float('madori_josu3',5,2)->nullable();
            $table->integer('madori_code4')->nullable();
            $table->float('madori_josu4',5,2)->nullable();
            $table->integer('madori_code5')->nullable();
            $table->float('madori_josu5',5,2)->nullable();
            $table->integer('madori_code6')->nullable();
            $table->float('madori_josu6',5,2)->nullable();
            $table->integer('madori_code7')->nullable();
            $table->float('madori_josu7',5,2)->nullable();
            $table->integer('madori_code8')->nullable();
            $table->float('madori_josu8',5,2)->nullable();
            $table->integer('madori_code9')->nullable();
            $table->float('madori_josu9',5,2)->nullable();
            $table->integer('madori_code10')->nullable();
            $table->float('madori_josu10',5,2)->nullable();
            $table->integer('parking_code')->nullable();
            $table->integer('parking_distancd')->nullable();
            $table->integer('parking_fee_code')->nullable();
            $table->decimal('parking_fee')->nullable();
            $table->integer('parking_tax')->nullable();
            $table->integer('nyukyo_term')->nullable();
            $table->integer('keiyaku_year')->nullable();
            $table->integer('keiyaku_month')->nullable();
            $table->integer('keiyaku_day')->nullable();
            $table->integer('nyukyo_joken')->nullable();
            $table->decimal('nyukyo_etc')->nullable();
            $table->integer('hoshonin_flg')->nullable();
            $table->integer('hoshonin_code')->nullable();
            $table->string('hosho_company_name')->nullable();
            $table->decimal('hosho_fee')->nullable();
            $table->text('hosho_biko')->nullable();
            $table->text('otoku_info')->nullable();
            $table->text('etc_fee_info')->nullable();
            $table->text('torihiki_keitai_info')->nullable();
            $table->text('manage_num')->nullable();
            $table->text('room_biko')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
