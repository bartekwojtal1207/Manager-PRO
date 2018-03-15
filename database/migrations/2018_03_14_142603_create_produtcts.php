<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutcts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('category_product_id');
            $table->integer('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
            $table->float('price');
            $table->string('name_product');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->string('previous_price');
            $table->string('description_product');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function($table) {
            $table->dropColumn('final_price');
        });
    }
}
