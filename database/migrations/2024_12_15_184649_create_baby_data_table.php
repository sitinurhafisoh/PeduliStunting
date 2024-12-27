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
        Schema::create('baby_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
            $table->date('ttl');
            $table->float('BB');
            $table->float('TB');
            $table->enum('JK', ['Laki-laki', 'Perempuan']);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baby_data');
    }
};
