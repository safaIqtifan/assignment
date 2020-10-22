<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->id();
            $table->integer('salesRepEmployee');
            $table->string('name',255);
            $table->string('firstName',255)->nullable();
            $table->string('lastName',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('address1',255)->nullable();
            $table->string('address2',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('state',255)->nullable();
            $table->integer('postalCode')->nullable();
            $table->string('country',255)->nullable();
            $table->decimal('creditLimit',19,0)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
