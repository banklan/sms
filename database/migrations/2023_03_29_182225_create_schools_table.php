<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('town_city');
            $table->string('state');
            $table->string('email')->unique();
            $table->string('mobile_tel');
            $table->string('office_tel');
            $table->string('public_id')->nullable();
            $table->string('mission')->nullable();
            $table->string('slogan')->nullable();
            $table->string('education_phase');
            $table->string('entry_gender');
            $table->string('school_type');
            $table->string('religion_consideration')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->date('date_of_establishment')->nullable();
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('schools');
    }
}
