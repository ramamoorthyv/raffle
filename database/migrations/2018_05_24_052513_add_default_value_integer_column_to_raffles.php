<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValueIntegerColumnToRaffles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('raffles', function($table) {
            $table->integer('total_value')->default(0)->change();
            $table->integer('max_tickets')->default(0)->change();
            $table->integer('prize_per_ticket')->default(0)->change();
            $table->integer('discount_multiple')->default(0)->change();
            $table->integer('price')->default(0)->change();
           
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
