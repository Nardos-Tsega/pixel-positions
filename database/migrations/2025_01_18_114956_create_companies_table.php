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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to users table
            $table->string('company_name');
            $table->string('industry');
            $table->enum('company_size', [
                '1-10',
                '11-50',
                '51-200',
                '201-500',
                '501-1000',
                '1000+'
            ]);
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('location');
            $table->text('company_description');  // Changed to text for longer content
            $table->boolean('is_verified')->default(false); // Changed to boolean
            $table->json('company_documents')->nullable(); // Changed to JSON for multiple documents
            $table->timestamp('verification_date')->nullable();
            $table->string('linkedin_company_page')->nullable();
            $table->json('social_media_links')->nullable();
            $table->string('primary_contact_name')->nullable();
            $table->string('primary_contact_position')->nullable();
            $table->string('primary_contact_email')->nullable();
            $table->json('office_hours')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('logo_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
