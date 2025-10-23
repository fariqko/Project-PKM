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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggota_osis')->onDelete('cascade');
            $table->foreignId('pemilihan_id')->constrained('pemilihans')->onDelete('cascade');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto')->nullable();
            $table->integer('jumlah_suara')->default(0);
            $table->timestamps();

            $table->unique(['anggota_id', 'pemilihan_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
