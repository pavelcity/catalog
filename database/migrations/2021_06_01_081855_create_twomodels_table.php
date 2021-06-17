<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwomodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twomodels', function (Blueprint $table) {
            $table->id();
						$table->integer('sort')->nullable();
						$table->string('title')->nullable();
						$table->mediumText('link')->nullable();
						$table->string('pic950')->nullable();
						$table->string('pic768')->nullable();
						$table->string('pic480')->nullable();
						$table->string('pic414')->nullable();
						$table->string('pic375')->nullable();
						$table->string('ogimg')->nullable();
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
        Schema::dropIfExists('twomodels');
    }
}
