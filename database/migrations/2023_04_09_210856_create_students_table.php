<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('student_id')->unique();
            $table->date('dob');
            $table->string('gender');
            $table->string('nationality');
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
            $table->string('public_id')->nullable();
            $table->string('blood_grp')->nullable();
            $table->string('genotype')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->foreignId('school_year_id')->nullable();
            $table->foreignId('year_class_id')->nullable();
            $table->foreignId('school_house_id')->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_loggedin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
