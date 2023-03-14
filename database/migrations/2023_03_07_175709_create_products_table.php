<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('slug')->unique();
            $table->string('nama');
            $table->foreignId('category_id')->constrained();
//            $table->unsignedBigInteger('category_id');
//            $table->foreign('category_id')->references('id')->on('categories');
            $table->bigInteger('harga');
            $table->integer('stok');
            $table->integer('berat');
            $table->text('deskripsi');
            $table->integer('terjual')->default(0);
            $table->unsignedFloat('rating')->default(0.0);
            $table->integer('jumlah_ulasan')->default(0);
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
}
