<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProductsDbAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name', 200)->change();
            $table->string('measurement', 200)->change();
            $table->string('description', 255)->change();
            $table->integer('cost_price')->change();
            $table->integer('percent_markup')->change();
            $table->integer('selling_price')->change();
            $table->integer('re_order')->change();
            $table->integer('barcode')->unsigned()->change();
            $table->integer('stock')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
