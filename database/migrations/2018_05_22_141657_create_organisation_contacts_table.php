<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('title', ['Mr', 'Ms','Mrs']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('surname');
            $table->string('address_number');
            $table->string('street');
            $table->string('city');            
            $table->string('postcode');
            $table->boolean('is_same_as_postal');
            $table->string('postal_address_number');
            $table->string('postal_street');
            $table->string('postal_city');
            $table->string('postal_postalcode');
            $table->string('work_phone');
            $table->string('fax_number');
            $table->string('position');
            $table->string('email');
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
        Schema::dropIfExists('organisation_contacts');
    }
}
