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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->year('release_year')->nullable();
            $table->unsignedSmallInteger('episodes')->default(1);
            $table->decimal('rating', 3, 1)->nullable();
            $table->boolean('has_manga')->default(false);
            $table->text('synopsis')->nullable();
            $table->text('tags')->nullable();
            $table->foreignId('studio_id')
                    ->constrained('studios')
                    ->cascadeOnUpdate()
                    ->restrictOnDelete();
            $table->timestamps();
            $table->index(['release_year', 'title']);
            $table->index('studio_id');
            $table->fullText(['title', 'synopsis', 'tags']);
            $table->unique(['title', 'studio_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
