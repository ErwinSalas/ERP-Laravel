<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('clients', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->string('civil_state');
            $table->date('birthday');
            $table->string('sex');
            $table->date('register_day');
            $table->string('type');
            $table->decimal('discount', 5, 2);
            $table->primary('id');
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
