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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50)->unique();
            $table->string('firstName', 50);
            $table->string('lastName', 50)->nullable();
            $table->string('country', 50)->default('Bangladesh');
            $table->string('pincode')->default('1234abc')->invisible();

            // Manually create created_at and updated_at columns with your desired settings
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
