<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokennftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokennfts', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('tokennft_id')->nullable();
			$table->foreign('tokennft_id')->references('id')->on('tokens');


			$table->string('title')->nullable();
			$table->string('slug')->nullable();
			$table->string('pic480_1')->nullable();
			$table->string('pic425_1')->nullable();
			$table->string('pic414_1')->nullable();
			$table->string('pic375_1')->nullable();
			$table->mediumText('short')->nullable();
			$table->string('price')->nullable();
			$table->longText('descr')->nullable();
			
			$table->string('pic350_1')->nullable();
			$table->string('price1')->nullable();
			
			$table->string('pic350_2')->nullable();
			$table->string('price2')->nullable();
						
			$table->string('pic350_3')->nullable();
			$table->string('price3')->nullable();
						
			$table->string('pic350_4')->nullable();
			$table->string('price4')->nullable();
						
						
			$table->string('pic350_5')->nullable();
			$table->string('price5')->nullable();
			
			$table->string('pic350_6')->nullable();
			$table->string('price6')->nullable();
			
			$table->string('pic350_7')->nullable();
			$table->string('price7')->nullable();
			
			$table->string('pic350_8')->nullable();
			$table->string('price8')->nullable();
			
			$table->string('pic350_9')->nullable();
			$table->string('price9')->nullable();
			
			$table->string('pic350_10')->nullable();
			$table->string('price10')->nullable();



			$table->string('metaTitle')->nullable();
			$table->text('description')->nullable();
			$table->text('keywords')->nullable();
			$table->string('author')->nullable();

			$table->string('ogimg')->nullable();


			$table->text('schemaDescription')->nullable();
			$table->string('schemaAuthor')->nullable();
			$table->string('schemaPublisher')->nullable();
						
						
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
        Schema::dropIfExists('tokennfts');
    }
}
