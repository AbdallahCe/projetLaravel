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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cef')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('email')->unique();
            $table->string('filiere');
            $table->string('classe');
            $table->date('birthday');
            $table->string('birthPlace')->nullable();
            $table->string('uemail')->unique();
            $table->string('upassword');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
