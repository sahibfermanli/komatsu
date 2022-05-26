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
        Schema::create('products', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable(true)->constrained()->onDelete('cascade');
            $table->string('name_az', 100);
            $table->string('name_en', 100);
            $table->string('name_ru', 100);
            $table->string('slug', 150)->unique();
            $table->string('model', 150)->nullable(true);
            $table->string('capacity', 150)->nullable(true);
            $table->string('front', 150)->nullable(true)->comment('Front / rear tyres');
            $table->string('travel_speed', 150)->nullable(true)->comment('Travel speed with / without load');
            $table->string('lifting_speed', 150)->nullable(true)->comment('Lifting speed with / without load');
            $table->string('outside_turning_radius', 150)->nullable(true);
            $table->string('operating_weight', 150)->nullable(true);
            $table->string('engine_power', 150)->nullable(true);
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
        Schema::dropIfExists('products');
    }
};
