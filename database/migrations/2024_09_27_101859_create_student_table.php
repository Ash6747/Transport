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
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('full_name');
            $table->string('prn', 20);
            $table->string('course', 100);
            $table->string('admission_year', 4);
            $table->string('parent_email', 30);
            $table->string('parent_name');
            $table->text('address');
            $table->string('parent_contact', 15);
            $table->date('dob');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
