<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodarkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podarkis', function (Blueprint $table) {
            $table->id();
						$table->string('title')->nullable();
						$table->string('price')->nullable();
						$table->text('utm')->nullable();
						$table->string('pic420')->nullable();
						$table->string('pic480')->nullable();
						$table->string('pic414')->nullable();
						$table->string('pic375')->nullable();
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
        Schema::dropIfExists('podarkis');
    }
}
