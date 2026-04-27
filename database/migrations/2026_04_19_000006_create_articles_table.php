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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universe_id')->constrained('universes')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->restrictOnDelete();
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();

            // Иерархическая связь для механизма ревизий
            $table->foreignId('parent_id')->nullable()->constrained('articles')->cascadeOnDelete();
            
            $table->string('title');
            $table->string('slug');
            $table->longText('content')->nullable();
            $table->string('status')->default('draft');
            $table->text('moderation_comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
