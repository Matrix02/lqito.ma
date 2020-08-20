<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->mediumText('body');
            $table->string('image');
            $table->string('location');
            $table->integer('recompense');
            $table->boolean('is_found');
            $table->boolean('is_published');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('region_id')->references('id')->on('regions');
            $table->enum('listing_type', ['lost', 'found']);
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
