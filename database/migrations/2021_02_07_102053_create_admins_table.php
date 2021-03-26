<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_admin_request_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('home');
            $table->string('phone');
            $table->string('licence');
            $table->string('shope_name');
            $table->tinyInteger('number_of_shop');
            $table->tinyInteger('business_type');
            $table->string('national_id');
            $table->text('business_address');
            $table->date('d_o_b');
            $table->tinyInteger('activation_status')->default(0);
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
        Schema::dropIfExists('admins');
    }
}
