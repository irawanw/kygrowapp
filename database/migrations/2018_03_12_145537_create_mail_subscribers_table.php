<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('name')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('state')->nullable();
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_subscribers');
    }
}
