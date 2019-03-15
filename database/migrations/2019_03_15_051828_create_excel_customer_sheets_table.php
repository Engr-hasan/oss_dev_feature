<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelCustomerSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_customer_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->text('customer_address');
            $table->string('customer_mobile');
            $table->string('customer_email');
            $table->string('product_name');
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
        Schema::drop('excel_customer_sheets');
    }
}
