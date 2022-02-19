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
        Schema::create('product', function ($table) {
            $table->integer('productId');
            $table->string('productName');
            $table->integer('supplierld');
            $table->integer('categoryId');
            $table->string('quantityPerUnit');
            $table->float('unitPrice');
            $table->integer('unitsInStock');
            $table->integer('unitsOnOrder');
            $table->integer('reorderLevel');
            $table->string('reorderLevel');
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
        Schema::dropIfExists('product');
    }
};
