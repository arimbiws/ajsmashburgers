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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->text('about_us');
            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            $table->string('address_main');
            $table->string('phone_main', 20);
            $table->string('email_main');
            $table->string('link_instagram')->nullable();
            $table->string('link_maps_main')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
