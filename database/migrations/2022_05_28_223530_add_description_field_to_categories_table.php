<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('categories', static function (Blueprint $table) {
            $table->string('description_az', 1000);
            $table->string('description_en', 1000);
            $table->string('description_ru', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('categories', static function (Blueprint $table) {
            $table->dropColumn(['description_az', 'description_en', 'description_ru']);
        });
    }
};
