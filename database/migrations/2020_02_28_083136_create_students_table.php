<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->date('dob');
            $table->text('address');
            $table->unsignedBigInteger('guardian_id');
            $table->unsignedBigInteger('class_id');
            $table->timestamps();

            $table->foreign('guardian_id')
                  ->references('id')->on('guardians')
                  ->onDelete('cascade');

            $table->foreign('class_id')
                  ->references('id')->on('classes')
                  ->onDelete('cascade');      
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
