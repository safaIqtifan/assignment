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

            $table->integer('code',5);
            $table->integer('productlineID');
            $table->string('name',255);
            $table->integer('scale')->nullable();
            $table->string('vendor',255);
            $table->string('pdtDescription',255);
            $table->integer('qtyInStock')->nullable();
            $table->decimal('buyPrice',19,0)->nullable();
            $table->string('MSRP',255)->nullable();
            $table->timestamps();

            $table->foreign('productlineID')->references('id')->on('productlines');


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
