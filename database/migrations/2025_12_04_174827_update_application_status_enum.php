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
        // We are redefining the column to include new statuses
        DB::statement("ALTER TABLE applications MODIFY COLUMN status ENUM('draft', 'submitted', 'under_review', 'approved', 'rejected', 'visa_processing', 'visa_submitted', 'visa_granted', 'visa_rejected') DEFAULT 'draft'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
