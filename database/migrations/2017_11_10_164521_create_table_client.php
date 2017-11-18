<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
			$table->integer('bairros_id')->unsigned();
			$table->string('title', 150);
			$table->string('address');
			$table->string('postcode', 16);
			$table->string('phone', 16);
			$table->string('cel',16);
			$table->string('email')->unique();
			$table->string('photo');
			$table->boolean('active')->default(0);
			$table->boolean('destaque')->default(0);
			$table->string('description');
			$table->string('map');
			$table->timestamps();

			$table->foreign('bairros_id')->references('id')->on('bairros');
			$table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
