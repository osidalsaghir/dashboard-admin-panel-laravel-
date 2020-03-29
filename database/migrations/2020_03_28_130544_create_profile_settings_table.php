<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_settings', function (Blueprint $table) {
            $table->id();
            $table->string('address')->default("Set Address");
            $table->string('city')->default("Set city");
            $table->string('country')->default("Set country");
            $table->string('email')->default("Set email");
            $table->string('phonenumber')->default("Set phone number");
            $table->string('facebook')->default("Set facebook");
            $table->string('twitter')->default("Set twitter");
            $table->string('whatsapp')->default("Set whatsapp");
            $table->string('instagram')->default("Set instegram");
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
        Schema::dropIfExists('profile_settings');
    }
}
