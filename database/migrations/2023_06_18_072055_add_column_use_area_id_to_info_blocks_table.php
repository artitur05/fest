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
        Schema::table('info_blocks', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\UseArea::class,'use_area')->constrained('use_areas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('info_blocks', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\UseArea::class,'use_area')->constrained('use_areas');
        });
    }
};
