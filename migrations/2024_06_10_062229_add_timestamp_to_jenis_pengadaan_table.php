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
        Schema::table('jenis_pengadaan', function (Blueprint $table) {
            $table->timestamp('created_at')->after('nama_pengadaan')->nullable();
            $table->timestamp('updated_at')->after('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jenis_pengadaan', function (Blueprint $table) {
            //
        });
    }
};