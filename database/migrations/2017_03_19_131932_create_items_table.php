<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('latitude', 12, 8)->nullable();
            $table->decimal('longitude', 12, 8)->nullable();
            $table->string('address', 256);
            $table->integer('featured')->nullable();
            $table->string('title', 256);
            $table->string('location', 256);
            $table->string('phone', 256);
            $table->string('email', 256);
            $table->string('website', 256)->nullable();
            $table->string('category', 256);
            $table->integer('rating')->nullable();
            $table->string('url', 256)->nullable();
            $table->string('marker_image', 256)->nullable();
            $table->string('additional_info', 256)->nullable();
            $table->text('description')->nullable();
            $table->string('ribbon', 256)->nullable();
            $table->string('video', 256)->nullable();
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
        Schema::dropIfExists('items');
    }
}
