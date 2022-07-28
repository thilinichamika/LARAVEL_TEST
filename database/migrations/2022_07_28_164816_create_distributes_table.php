<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nic');
            $table->string('add');
            $table->string('mobile');
            $table->string('mail');
            $table->string('gender');
            $table->string('tCode');
            $table->string('uName');
            $table->string('pass');
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
        Schema::dropIfExists('distributes');
    }
};
