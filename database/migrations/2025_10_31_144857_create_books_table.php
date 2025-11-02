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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('author');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(1);
            $table->year('publication_year')->nullable();
            $table->string('publisher')->nullable();
            $table->string('language')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index(['seller_id', 'is_active']);
            $table->index('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
