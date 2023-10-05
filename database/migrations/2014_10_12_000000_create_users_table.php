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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('username')->nullable();
            $table->string('photo')->nullable();
            $table->string('department')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->boolean('status')->default(false);//add status boolean users: 0=>unregistered,1=>registered,
            $table->boolean('role')->default(false);//add role boolean users: 0=>teacher,1=>student,
            $table->text('state')->nullable();
            $table->text('Zip')->nullable();
            $table->text('country')->nullable();
            $table->text('course')->nullable();
            $table->text('dob')->nullable();
            $table->text('sex')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
