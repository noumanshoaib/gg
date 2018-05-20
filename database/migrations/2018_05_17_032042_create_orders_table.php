<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('ladb_process',255);
            $table->string('our_product_name',255);
            $table->string('his_product_name',255);
            $table->string('industry',455);
            $table->string('c1',255);
            $table->string('c2',255);
            $table->string('logo',500);
            $table->string('d1');
            $table->integer('first_installment');
            $table->string('d2');
            $table->integer('second_installment');
            $table->integer('total');
            $table->text('base_requirements');
            $table->text('additional_requirements');
            $table->integer('status');
            $table->timestamps();
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
        Schema::dropIfExists('orders');
    }
}
