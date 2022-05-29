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
        Schema::create('sliders', static function (Blueprint $table) {
            $table->id();
            $table->string('title_az', 100);
            $table->string('title_en', 100);
            $table->string('title_ru', 100);
            $table->string('description_az', 255);
            $table->string('description_en', 255);
            $table->string('description_ru', 255);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
