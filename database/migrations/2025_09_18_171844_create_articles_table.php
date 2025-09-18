<?php

// database/migrations/YYYY_MM_DD_create_articles_table.php

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
            $table->string('link')->unique(); // 'link' should be unique
            $table->string('title');
            $table->string('photo');
            $table->integer('date');
            $table->boolean('top')->default(false)->index(); // Added index as it's a key in SQL
            $table->text('text');
            $table->boolean('published')->default(true);
            $table->timestamps(); // Using Laravel's timestamps instead of manual int
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
