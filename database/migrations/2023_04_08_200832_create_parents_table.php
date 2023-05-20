<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address_house_no');
            $table->string('address_first_line');
            $table->string('address_second_line');
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('national');
            $table->string('local_govt')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('profession')->nullable();
            $table->string('bus_addr_no')->nullable();
            $table->string('bus_addr_fl')->nullable();
            $table->string('bus_addr_sl')->nullable();
            $table->string('bus_addr_city')->nullable();
            $table->string('religion')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('parents');
    }
}
