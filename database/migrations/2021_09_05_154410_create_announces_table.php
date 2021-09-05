<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('announcetype_id')->constrained('announcetypes');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('wilaya_id')->constrained('wilayas');
            $table->string('name');
            $table->string('price');
            $table->string('location');
            $table->longText('images');
            $table->longText('description');
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
        Schema::dropIfExists('announces');
    }
}
