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
        Schema::create('nutrition', function (Blueprint $table) {
            $table->id();
            $table->string('trimester_category');
            $table->text('deskripsi');
            $table->string('nama_mkn');
            $table->string('gambar_mkn')->nullable();
            $table->text('info_nutrisi');
            $table->text('manfaat');
            $table->text('cara_membuat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrition');
    }
};
