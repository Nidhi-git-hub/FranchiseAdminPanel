<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('suser_id');
            $table->string('sname');
            $table->string('fname');
            $table->string('dob');
            $table->string('course');
            $table->string('contactnumber');
            $table->string('email',150);
            $table->string('password',150);
            $table->string('coursefee');
            $table->string('submittedfee');
            $table->string('certificate')->nullable();
            $table->string('paymentremark');
            $table->string('paymentmethod');
            $table->string('registration');
            $table->string('regno')->nullable();
            $table->string('name');
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
}
