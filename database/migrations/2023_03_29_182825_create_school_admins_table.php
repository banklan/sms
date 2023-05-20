<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('staff_id')->nullable();
            $table->string('phone');
            $table->date('dob');
            $table->string('gender');
            $table->string('nationality');
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
            $table->string('public_id')->nullable();
            $table->unsignedInteger('role')->default(2);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('school_admins');
    }
}
