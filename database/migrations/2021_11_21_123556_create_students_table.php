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
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('session_id');
            $table->string('childName',60);
            $table->boolean('gender')->default(0);
            $table->date('birthDate');
            $table->string('placeOfBirth')->nullable();
            $table->string('homeAddress');
            $table->string('homePhone')->nullable();
            $table->string('momCellPhone')->nullable();
            $table->string('dadCellPhone')->nullable();
            $table->string('FatherName')->nullable();
            $table->string('workPlace')->nullable();
            $table->string('occupation')->nullable();
            $table->string('email')->nullable();
            $table->string('permanentAddress');
            $table->string('currentAddress');
            $table->date('admissionDate');
            $table->string('imageURL')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('class_id')->references('id')->on('sclasses')
            ->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('sessions')
            ->onDelete('cascade');
            $table->rememberToken();
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