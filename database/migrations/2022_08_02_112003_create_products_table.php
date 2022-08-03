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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->decimal(column: 'price');
            $table->string(column: 'photo');
            $table->unsignedBigInteger(column: 'category_id');
           // $table->foreginId('category_id');
            //$table->foregin(columns: 'category_id')->references(columns: 'id')->on(table: 'categories');
            //$table->foreign('category_id', 'category_fk_7003576')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
};
