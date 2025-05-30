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
         $table->id();
    $table->foreignId('artist_id')->constrained('artists')->onDelete('cascade')->onUpdate('cascade'); // Use foreign key
    $table->string('song_name');
    $table->string('image');
    $table->string('year')->nullable();
    $table->string('genre')->nullable();
    $table->timestamps();;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
};
