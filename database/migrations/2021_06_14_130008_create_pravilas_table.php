<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePravilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pravilas', function (Blueprint $table) {
            $table->id();
            $table->string('politictitle')->nullable();
            $table->longText('politic')->nullable();
            
            $table->string('dostavkatitle')->nullable();
            $table->longText('dostavka')->nullable();
            
            $table->string('pokupkatitle')->nullable();
            $table->longText('pokupka')->nullable();
            
            $table->string('obmentitle')->nullable();
            $table->longText('obmen')->nullable();
            
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
        Schema::dropIfExists('pravilas');
    }
}
