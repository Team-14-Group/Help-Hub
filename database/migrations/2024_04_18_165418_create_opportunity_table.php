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
        Schema::create('opportunity', function (Blueprint $table) {
            $table->id();
            $table->string('title', 25);
            $table->text('description')->nullable();
            $table->enum('type', ['in_person', 'virtual'])->nullable();
            $table->enum('category', ['education', 'environment', 'health', 'social_services'])->nullable();
            $table->string('location', 35);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('time_commitment', 25);
            $table->text('skills_required')->nullable();
            $table->unsignedBigInteger('org_id');
            $table->foreign('org_id')->references('id')->on('organization')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunity');
    }
};
