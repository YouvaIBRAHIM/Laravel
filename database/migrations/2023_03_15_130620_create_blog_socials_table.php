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
        Schema::create('blog_socials', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('likes');

            $table->unsignedBigInteger('blog_post_id')->unique();
            $table->foreign('blog_post_id')->references('id')->on('blog_posts');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_socials');
    }
};
