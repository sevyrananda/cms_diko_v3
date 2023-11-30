<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingSpTable extends Migration
{
    public function up()
    {
        Schema::create('pricing_sp', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pricingsp', 255);
            $table->bigInteger('harga_pricingsp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_sp');
    }
}

