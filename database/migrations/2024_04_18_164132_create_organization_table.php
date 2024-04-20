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
       Schema::create('organization', function (Blueprint $table) {
           $table->id();
           $table->string('name', 25);
           $table->string('website', 45)->nullable();
           $table->string('contact_person', 15)->nullable();
           $table->string('contact_email', 15)->nullable();
           $table->string('location', 45)->nullable();
           $table->timestamps();
       });
   }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization');
    }
};
