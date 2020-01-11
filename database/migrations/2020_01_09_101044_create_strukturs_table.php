<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStruktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strukturs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tokoh')->unique();
            $table->string('watak')->default(50);
            $table->string('latar')->default();
            $table->string('alur')->default();
            $table->string('amanat')->default();
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
        Schema::dropIfExists('strukturs');
    }
}
