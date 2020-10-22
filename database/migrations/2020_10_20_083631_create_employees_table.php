<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->id();
            $table->integer('officeCode')->nullable();
            $table->integer('reportsTo')->nullable();
            $table->string('lastName',255);
            $table->string('firstName',255);
            $table->string('extension',255)->nullable();
            $table->string('email')->unique();
            $table->string('jobTitle',100);
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
        Schema::dropIfExists('employees');
    }
}
