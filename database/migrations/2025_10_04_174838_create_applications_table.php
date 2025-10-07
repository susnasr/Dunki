<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_number')->unique();
            $table->foreignId('client_id')->constrained('client_profiles')->onDelete('cascade');
            $table->enum('type', ['study_visa', 'work_visa', 'university_application']);
            $table->enum('status', ['draft', 'submitted', 'under_review', 'approved', 'rejected'])->default('draft');
            $table->string('destination_country')->nullable();
            $table->string('university_name')->nullable();
            $table->string('course_name')->nullable();
            $table->foreignId('assigned_to')->nullable()->constrained('users');
            $table->date('submission_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
