<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_hours', function (Blueprint $table) {
            $table->id();
            $table->string('saturday_hours_from')->nullable();
            $table->string('saturday_hours_to')->nullable();
            $table->string('sunday_hours_from')->nullable();
            $table->string('sunday_hours_to')->nullable();
            $table->string('monday_hours_from')->nullable();
            $table->string('monday_hours_to')->nullable();
            $table->string('tuesday_hours_from')->nullable();
            $table->string('tuesday_hours_to')->nullable();
            $table->string('wednesday_hours_from')->nullable();
            $table->string('wednesday_hours_to')->nullable();
            $table->string('thursday_hours_from')->nullable();
            $table->string('thursday_hours_to')->nullable();
            $table->string('friday_hours_from')->nullable();
            $table->string('friday_hours_to')->nullable();
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
        Schema::dropIfExists('work_hours');
    }
};
