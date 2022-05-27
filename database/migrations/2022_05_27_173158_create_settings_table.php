<?php

use App\Models\Setting;
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
        Schema::create('settings', static function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('phone', 30)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('meta_keywords', 1000)->nullable();
            $table->string('meta_description', 3000)->nullable();
            $table->string('google_site_verification', 300)->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->softDeletes();
        });

        Setting::query()->create(['title' => 'Komatsu']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
