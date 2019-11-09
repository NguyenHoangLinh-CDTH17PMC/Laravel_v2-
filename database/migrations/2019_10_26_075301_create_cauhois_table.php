<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauhoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hoi', function (Blueprint $table) {
            $table->increments('id');
            $table->text('noidung');
            $table->unsignedInteger('linh_vuc_id');
            $table->foreign('linh_vuc_id')->references('id')->on('linh_vuc');
            $table->text('phuong_an_a');
            $table->text('phuong_an_b');
            $table->text('phuong_an_c');
            $table->text('phuong_an_d');
            $table->text('dap_an');
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
        Schema::dropIfExists('cau_hoi');
    }
}
