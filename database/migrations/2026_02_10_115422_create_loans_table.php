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
        Schema::create('loans', function (Blueprint $table) {
    $table->id('loan_id');
    $table->foreignId('user_id')->constrained('users', 'id'); // Links to default Laravel User
    $table->foreignId('hardware_item_id')->constrained('hardware_items', 'hardware_item_id');
    $table->timestamp('request_date')->useCurrent();
    $table->dateTime('start_date')->nullable();
    $table->dateTime('due_date');
    $table->dateTime('return_date')->nullable();
    $table->string('status', 50)->default('pending');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
