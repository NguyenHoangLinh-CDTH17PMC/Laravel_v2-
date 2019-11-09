<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotchoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('luot_choi_id');
            $table->unsignedInteger('cau_hoi_id');
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
            $table->foreign('luot_choi_id')->references('id')->on('luot_choi');
            $table->string('phuong_an');
            $table->integer('diem');
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
        Schema::dropIfExists('luot_choi');
    }
}
