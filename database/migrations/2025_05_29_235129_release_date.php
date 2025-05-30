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
        Schema::create('release_date', function (Blueprint $table) {
            $table->id();
            $table->string('release_date'); // Define as a string (VARCHAR)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('release_date');
    }
};

