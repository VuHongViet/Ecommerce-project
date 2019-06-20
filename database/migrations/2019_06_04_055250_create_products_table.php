<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            //Bảng sản phẩm thuộc danh mục và loại sản phẩm nào đó
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->integer('quantity');
            $table->float('price',11);
            $table->float('promotional',11);
            $table->string('image');
            $table->integer('idCategory');
            $table->integer('idProductType');
            $table->foreign('idCategory')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('idProductType')->references('id')->on('product_types')->onDelete('cascade');
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
