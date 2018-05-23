<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRafflesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('no_of_prizes');
            $table->integer('total_value');
            $table->string('organisation');
            $table->date('last_selling_date');
            $table->date('draw_date');
            $table->string('draw_place');
            $table->integer('max_tickets');
            $table->integer('prize_per_ticket');
            $table->integer('discount_multiple');
            $table->decimal('price', 5, 2);
            $table->enum('status', ['Draft', 'Activated Not Drawn','Closed']);
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
        Schema::dropIfExists('raffles');
    }
}
