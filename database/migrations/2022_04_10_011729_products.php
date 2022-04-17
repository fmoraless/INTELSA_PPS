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
        //aqui declaramos las llaves foraneas y podemos agregar mas campos y aqui configuramos productos en ofertas
    Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique()->nullable();
            $table->string('name')->unique();

            $table->integer('stock')->default(0);

            $table->string('image');
            
            $table->decimal('sell_price',12,2); //precio de venta
            $table->enum('status',['ACTIVE','DESACTIVATED'])->default('ACTIVE');

            $table->unsignedBigInteger('category_id'); 
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('provider_id'); 
            $table->foreign('provider_id')->references('id')->on('providers');           
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
};
