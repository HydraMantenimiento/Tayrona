<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_status_id');
            $table->foreign('product_status_id')->references('id')->on('product_status');
            $table->unsignedBigInteger('product_categorys_id');
            $table->foreign('product_categorys_id')->references('id')->on('product_categorys');
            $table->string('name');
            $table->string('descripcion');
            $table->string('precio');
            //$table->string('quantities');
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
        Schema::dropIfExists('productos');
    }
}
