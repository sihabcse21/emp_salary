<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSalarySheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('id')->on('employees');
            $table->date('joining_date');
            $table->double('salary')->default(0);
            $table->double('house_rent')->default(0);
            $table->double('medical_fee')->default(0);
            $table->double('conveyance')->default(0);
            $table->integer('month');
            $table->integer('year');
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
        Schema::dropIfExists('salary_sheets');
    }
}
