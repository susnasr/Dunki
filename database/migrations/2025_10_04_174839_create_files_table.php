<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->nullable()->constrained('client_profiles')->onDelete('cascade');
            $table->foreignId('application_id')->nullable()->constrained('applications')->onDelete('cascade');
            $table->enum('file_type', ['passport', 'transcript', 'sop', 'lor', 'ielts', 'financial_proof', 'photo', 'cv']);
            $table->string('file_name');
            $table->string('original_name');
            $table->string('file_path');
            $table->integer('file_size')->nullable();
            $table->string('mime_type')->nullable();
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->foreignId('uploaded_by')->constrained('users');
            $table->foreignId('verified_by')->nullable()->constrained('users');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
};
