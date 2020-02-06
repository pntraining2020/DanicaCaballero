<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id')->references('id')->on('employees');
            $table->timestamp('started_at')->default(null)->nullable();;
            $table->timestamp('stopped_at')->default(null)->nullable();
            $table->timestamp('break_start')->default(null)->nullable();;
            $table->timestamp('break_end')->default(null)->nullable();;
            $table->timestamp('time_worked')->default(null)->nullable();;
            $table->timestamp('break_used')->default(null)->nullable();;
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
        Schema::dropIfExists('time');
    }
}
