<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('speciality');
            $table->string('uemail')->unique();
            $table->string('upassword');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
