<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanernftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banernfts', function (Blueprint $table) {
            $table->id();
						$table->string('title')->nullable();
						$table->mediumText('link')->nullable();
						$table->string('pic950')->nullable();
						$table->string('pic768')->nullable();
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
        Schema::dropIfExists('banernfts');
    }
}
