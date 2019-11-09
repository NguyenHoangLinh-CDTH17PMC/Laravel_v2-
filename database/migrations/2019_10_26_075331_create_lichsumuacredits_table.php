<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichsumuacreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua_credit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            $table->unsignedInteger('goi_credit_id');
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
            $table->integer('credit');
            $table->integer('so_tien');
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
        Schema::dropIfExists('lich_su_mua_credit');
    }
}
