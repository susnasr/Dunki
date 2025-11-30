<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');                // e.g. "Oxford University"
            $table->string('country');             // e.g. "UK"
            $table->string('city')->nullable();    // e.g. "London"
            $table->string('logo')->nullable();    // URL to image
            $table->text('description')->nullable();

            // Search Filters
            $table->integer('ranking')->nullable(); // Global Ranking
            $table->decimal('tuition_fee', 10, 2)->nullable(); // Average fee
            $table->boolean('accepts_without_ielts')->default(false); // Helpful filter

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
