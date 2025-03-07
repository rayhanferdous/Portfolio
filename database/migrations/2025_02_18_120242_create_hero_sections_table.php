<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('hero_small_title')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->string('number_of_awards')->nullable();
            $table->string('number_of_pubs')->nullable();
            $table->string('number_of_published_news')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
