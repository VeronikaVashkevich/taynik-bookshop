<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vendor_code')->unique();
            $table->string('name', 400);
            $table->string('image', 500);
            $table->string('author', 300);
            $table->integer('pages');
            $table->double('price');
            $table->double('price_sale');
            $table->date('year');
            $table->string('genre', 100);
            $table->string('description', 2000);
            $table->integer('age');
            $table->integer('length');
            $table->integer('width');
            $table->string('cover', 15);
            $table->string('country', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
