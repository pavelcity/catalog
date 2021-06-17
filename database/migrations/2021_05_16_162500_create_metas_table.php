<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->id();

						$table->text('ogtitle')->nullable();
						$table->string('ogurl')->nullable();
						$table->string('ogimg')->nullable();
						$table->text('home_title')->nullable();
						$table->text('home_description')->nullable();
						$table->text('home_keywords')->nullable();
						$table->string('home_author')->nullable();
						$table->string('home_canonical')->nullable();

						

						$table->text('tovary_title')->nullable();
						$table->text('tovary_description')->nullable();
						$table->text('tovary_keywords')->nullable();
						$table->text('tovary_canonical')->nullable();
						$table->text('tovary_avtor')->nullable();



						$table->text('contact_title')->nullable();
						$table->text('contact_description')->nullable();
						$table->text('contact_keywords')->nullable();
						$table->text('contact_canonical')->nullable();
						$table->text('contact_avtor')->nullable();



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
        Schema::dropIfExists('metas');
    }
}
