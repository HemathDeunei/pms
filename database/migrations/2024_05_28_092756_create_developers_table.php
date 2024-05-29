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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('bio_id')->unique();
            $table->string('user_name');
            $table->string('password');
            $table->string('personal_email')->unique();
            $table->string('official_email')->unique();
            $table->string('employee_id')->unique();
            $table->string('tech_stack');
            $table->string('experience');
            $table->string('linkedin');
            $table->string('portfolio');
            $table->string('mobile_number');
            $table->string('designation');
            $table->string('status')->default('pending'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
