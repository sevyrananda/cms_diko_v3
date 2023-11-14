<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeskripsiPricingspTable extends Migration
{
    public function up()
    {
        Schema::create('deskripsi_pricingsp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pricing_sp_id');
            $table->foreign('pricing_sp_id')->references('id')->on('pricing_sp')->onDelete('cascade');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deskripsi_pricingsp');
    }
}