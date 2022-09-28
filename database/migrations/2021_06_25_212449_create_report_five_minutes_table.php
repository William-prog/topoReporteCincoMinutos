<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportFiveMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_five_minutes', function (Blueprint $table) {
            $table->id();
            $table->date('reportDate');
            $table->string('reportTurn');
            $table->string('reportSchedule');
            $table->string('reportAdvanceStart');
            $table->string('reportAdvanceEnd');
            $table->string('reportAdvanceTotal');
            $table->string('reportHorometerStart');
            $table->string('reportHorometerEnd');
            $table->string('reportHorometerTotal');

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
        Schema::dropIfExists('report_five_minutes');
    }
}
