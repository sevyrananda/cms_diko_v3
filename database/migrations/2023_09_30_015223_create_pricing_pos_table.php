<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingPosTable extends Migration
{
    public function up()
    {
        Schema::create('pricing_pos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pricingpos', 255);
            $table->bigInteger('harga_pricingpos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_pos');
    }
}

