<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        ['product','amount','min_amount','max_amount','save_except'];
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product');
            $table->string('amount');
            $table->integer('min_amount');
            $table->integer('max_amount');
            $table->string('save_except');
            $table->foreign('product')->references('id')->on('products')->onDelete('cascade');
            $table->rememberToken();
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
        //
    }
}
