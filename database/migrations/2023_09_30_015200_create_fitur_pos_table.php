<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fitur_pos', function (Blueprint $table) {
            $table->id();
            $table->string('icon1',100);
            $table->string('judul_icon1',100);
            $table->string('judul_detail',100);
            $table->string('isi_detail',100);
            $table->string('icon2',100);
            $table->string('judul_icon2',100);
            $table->string('isi',100);
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitur_pos');
    }
};
