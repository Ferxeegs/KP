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
        Schema::create('detail_pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->float('harga');
            $table->string('tujuanwisata');
            $table->bigInteger('durasi');
            $table->bigInteger('detailharga');
            $table->bigInteger('paketwisata_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_paket');
    }
};
