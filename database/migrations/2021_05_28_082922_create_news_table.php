<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

						$table->string('status')->default(1);
						$table->string('title')->nullable();
						$table->string('slug')->nullable();
						$table->string('pic')->nullable();
						$table->string('smallpic')->nullable();
						$table->string('pic480')->nullable();
						$table->string('pic414')->nullable();
						$table->mediumText('short')->nullable();
						$table->text('descr')->nullable();
 
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
        Schema::dropIfExists('news');
    }
}
