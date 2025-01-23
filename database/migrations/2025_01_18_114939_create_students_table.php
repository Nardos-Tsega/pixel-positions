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
        Schema::create('students', function (Blueprint $table) {
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('institution');
            $table->string('profile_path')->nullable();
            $table->string('field_of_study');
            $table->enum('education_level', ['high_school', 'bachelors', 'masters', 'phd', 'other']);
            $table->text('bio')->nullable();
            $table->string('location')->nullable();
            $table->float('completion_score')->default(0);
            $table->json('skills')->nullable();
            $table->string('student_id')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
