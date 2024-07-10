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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('work_email')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('image')->nullable();                                      
            $table->enum('gender', ['male', 'female'])->nullable();   
            $table->date('date_of_birth')->nullable();      
            $table->boolean('military_check')->nullable();   //type 0/1      //if he's male
            $table->string('portfolio_link')->nullable();             
            $table->string('facebook_link')->nullable();             
            $table->string('linkedin_link')->nullable();             
            $table->string('github_link')->nullable();            
            $table->json('skills')->nullable();            
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('city_id')->nullable()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
