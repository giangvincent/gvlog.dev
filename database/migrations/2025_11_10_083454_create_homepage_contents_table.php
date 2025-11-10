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
        Schema::create('homepage_contents', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_cta_label')->nullable();
            $table->string('hero_cta_url')->nullable();
            $table->string('secondary_cta_label')->nullable();
            $table->string('secondary_cta_url')->nullable();
            $table->string('intro_title')->nullable();
            $table->text('intro_body')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->json('featured_project_ids')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_contents');
    }
};
