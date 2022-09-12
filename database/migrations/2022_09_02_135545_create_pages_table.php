<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('seo-title');
            $table->bigInteger('category_id')->unsigned();
            $table->text('intro');
            $table->longText('page_content');
            $table->text('price_block')->nullable();
            $table->text('dot_block')->nullable();
            $table->string('description', '255');
            $table->string('img')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('pages');
    }
};
