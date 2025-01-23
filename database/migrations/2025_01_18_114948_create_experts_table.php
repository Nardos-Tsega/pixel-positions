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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('profile_path')->nullable();
            $table->json('expertise_areas')->nullable();
            $table->json('certifications')->nullable();
            $table->unsignedInteger('years_of_experience')->default(0);
            $table->decimal('rating', 3, 2)->default(0.00);  // Changed to decimal for precise ratings
            $table->json('availability')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->text('bio')->nullable();
            $table->string('linkedin_profile')->nullable();  // Added professional profile
            $table->boolean('is_available')->default(true);  // Added availability status
            $table->unsignedInteger('completed_sessions')->default(0); // Track record
            $table->enum('expert_level', ['junior', 'intermediate', 'senior', 'principal'])->default('junior');
            $table->json('languages')->nullable();  // Languages they can teach/communicate in
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
