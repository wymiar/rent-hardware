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
        Schema::create('hardware_items', function (Blueprint $table) {
    $table->id('hardware_item_id');
    $table->foreignId('catalogue_id')->constrained('catalogue_items', 'catalogue_id');
    $table->string('serial_number', 100)->unique();
    $table->string('color', 50)->nullable();
    $table->string('condition_status', 55);
    $table->boolean('available')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_items');
    }
};
