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
        Schema::create('user_playlist', function (Blueprint $table) {
            $table->string('user_list');
            $table->foreignId('playlist_id')->constraint('playlist')->nullOnDelete()->onUpdate('cascade');
            $table->foreignId('user_id')->constraint('users')->nullOnDelete()->onUpdate('cascade');
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
        Schema::dropIfExists('user_playlist');
    }
};
