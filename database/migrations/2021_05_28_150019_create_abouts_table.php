<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

						$table->string('status')->default(1);
						$table->string('title')->nullable();

						$table->string('phone')->nullable();
						$table->string('email')->nullable();

						$table->string('pic1500')->nullable();
						$table->string('pic1440')->nullable();
						$table->string('pic1366')->nullable();
						$table->string('pic1024')->nullable();
						$table->string('pic992')->nullable();
						$table->string('pic768')->nullable();
						$table->string('pic600')->nullable();

						$table->string('pic480')->nullable();
						$table->string('pic414')->nullable();

						$table->string('pic375')->nullable();

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
        Schema::dropIfExists('abouts');
    }
}
