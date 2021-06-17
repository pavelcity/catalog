<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            
            $table->string('title')->nullable();
			$table->string('pic370_1')->nullable();
			$table->string('pic370_2')->nullable();
			$table->string('pic370_3')->nullable();
			$table->string('pic370_4')->nullable();
			$table->string('pic370_5')->nullable();
			$table->string('pic370_6')->nullable();
			$table->string('pic370_7')->nullable();
			$table->string('pic370_8')->nullable();
			$table->string('pic370_9')->nullable();
			$table->string('pic370_10')->nullable();
			$table->string('price')->nullable();


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
        Schema::dropIfExists('tokens');
    }
}
