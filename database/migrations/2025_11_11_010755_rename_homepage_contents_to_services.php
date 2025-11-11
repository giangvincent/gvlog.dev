<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('homepage_contents') && ! Schema::hasTable('services')) {
            Schema::rename('homepage_contents', 'services');
        }

        Schema::table('services', function (Blueprint $table) {
            $table->string('title')->nullable()->after('slug');
            $table->string('subtitle')->nullable()->after('title');
            $table->text('excerpt')->nullable()->after('subtitle');
            $table->longText('body')->nullable()->after('excerpt');
            $table->string('cover_image_path')->nullable()->after('body');
            $table->boolean('is_featured')->default(false)->after('cover_image_path');
            $table->unsignedSmallInteger('sort_order')->default(0)->after('is_featured');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'hero_title',
                'hero_subtitle',
                'hero_description',
                'hero_cta_label',
                'hero_cta_url',
                'secondary_cta_label',
                'secondary_cta_url',
                'intro_title',
                'intro_body',
                'seo_title',
                'seo_description',
                'featured_project_ids',
            ]);
        });
    }

    public function down(): void
    {
        if (! Schema::hasTable('services')) {
            return;
        }

        Schema::table('services', function (Blueprint $table) {
            $table->string('hero_title')->nullable()->after('slug');
            $table->string('hero_subtitle')->nullable()->after('hero_title');
            $table->text('hero_description')->nullable()->after('hero_subtitle');
            $table->string('hero_cta_label')->nullable()->after('hero_description');
            $table->string('hero_cta_url')->nullable()->after('hero_cta_label');
            $table->string('secondary_cta_label')->nullable()->after('hero_cta_url');
            $table->string('secondary_cta_url')->nullable()->after('secondary_cta_label');
            $table->string('intro_title')->nullable()->after('secondary_cta_url');
            $table->text('intro_body')->nullable()->after('intro_title');
            $table->string('seo_title')->nullable()->after('intro_body');
            $table->text('seo_description')->nullable()->after('seo_title');
            $table->json('featured_project_ids')->nullable()->after('seo_description');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'subtitle',
                'excerpt',
                'body',
                'cover_image_path',
                'is_featured',
                'sort_order',
            ]);
        });

        if (Schema::hasTable('services')) {
            Schema::rename('services', 'homepage_contents');
        }
    }
};
