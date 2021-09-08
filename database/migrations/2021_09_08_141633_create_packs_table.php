<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('from', 25);
            $table->string('to',25);
            $table->smallInteger('price')->unsigned();
            $table->tinyInteger('n_travelers')->unsigned();
            $table->text('description');
            $table->dateTime('date_from', 0);
            $table->dateTime('date_to', 0);
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
        Schema::dropIfExists('packs');
    }
}
