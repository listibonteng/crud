<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prolog')->unique();
            $table->string('pengantar')->default();
            $table->string('bab')->default(50);
            $table->string('penutup')->default();
            $table->string('epilog')->default();
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
        Schema::dropIfExists('isis');
    }
}
