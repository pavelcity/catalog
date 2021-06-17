<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('catcollection_id')->nullable();
            
            $table->string('title')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('descr')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->string('price')->nullable();
            
            $table->string('pic400_1')->nullable();
            $table->string('pic375_1')->nullable();
            $table->string('pic400_2')->nullable();
            $table->string('pic375_2')->nullable();
            $table->string('pic400_3')->nullable();
            $table->string('pic375_3')->nullable();
            $table->string('pic400_4')->nullable();
            $table->string('pic375_4')->nullable();
            $table->string('pic400_5')->nullable();
            $table->string('pic375_5')->nullable();
            
            $table->string('pic400_6')->nullable();
            $table->string('pic375_6')->nullable();
            
            $table->string('pic400_7')->nullable();
            $table->string('pic375_7')->nullable();
            
            $table->string('pic400_8')->nullable();
            $table->string('pic375_8')->nullable();
            
            $table->string('pic400_9')->nullable();
            $table->string('pic375_9')->nullable();
            
            $table->string('pic400_10')->nullable();
            $table->string('pic375_10')->nullable();


						$table->string('metaTitle')->nullable();
						$table->text('description')->nullable();
						$table->text('keywords')->nullable();
						$table->string('author')->nullable();

						$table->string('ogimg')->nullable();


						$table->text('schemaDescription')->nullable();
						$table->string('schemaAuthor')->nullable();
						$table->string('schemaPublisher')->nullable();




            
            $table->foreign('catcollection_id')->references('id')->on('catcollections');
            
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
        Schema::dropIfExists('collections');
    }
}
