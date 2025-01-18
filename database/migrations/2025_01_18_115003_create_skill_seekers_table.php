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
        Schema::create('skill_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('current_job')->nullable();
            $table->json('desired_skills')->nullable();
            $table->json('completed_trainings')->nullable();
            $table->decimal('completion_score', 5, 2)->default(0.00);
            $table->text('bio')->nullable();
            $table->string('location')->nullable();
            $table->boolean('sponsorship_eligible')->default(false);
            $table->json('interests')->nullable(); // Career interests
            $table->enum('experience_level', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->json('learning_preferences')->nullable(); // Preferred learning methods
            $table->json('availability')->nullable(); // When they're available for training
            $table->string('preferred_language')->nullable();
            $table->integer('completed_courses_count')->default(0);
            $table->json('certificates_earned')->nullable();
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
        Schema::dropIfExists('skill_seekers');
    }
};
