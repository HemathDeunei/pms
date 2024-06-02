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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->string('project_description');
            $table->string('project_source');
            $table->string('assignies')->default('NA');
            $table->string('start_date')->default('NA');
            $table->string('deadline')->default('NA');
            $table->string('task')->default('NA');
            $table->string('progress')->default('NA');
            $table->string('status')->default('NA');
            $table->string('project_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
