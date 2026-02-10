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
    Schema::create('catalogue_items', function (Blueprint $table) {
    $table->id('catalogue_id');
    $table->foreignId('category_id')->constrained('categories', 'category_id');
    $table->string('name', 255);
    $table->string('description', 255)->nullable();
    $table->string('image_url')->nullable();
    $table->timestamps();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogue_items');
    }
};
