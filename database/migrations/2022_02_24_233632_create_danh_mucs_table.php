<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_mucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendanhmuc')->nullable();
            $table->tinyInteger('trangthai')->nullable();
            $table->timestamps();
        });
        // Schema::table('san_phams', function (Blueprint $table){
        //     $table->bigInteger('id_danhmuc')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('san_phams', function (Blueprint $table){
        //     $table->dropColumn('id_danhmuc');
        // });
        
        Schema::dropIfExists('danh_mucs');
    }
};
