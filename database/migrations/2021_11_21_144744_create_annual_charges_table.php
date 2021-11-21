<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_charges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->Integer('charge_amount')->nullable();
            $table->string('charge_type')->nullable();
            $table->date('charge_date')->nullable();
            $table->foreign('class_id')->references('id')->on('sclasses')
            ->onDelete('cascade');
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
        Schema::dropIfExists('annual_charges');
    }
}