<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Event_id');
            $table->unsignedBigInteger('par_id');
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_inside')->default(false);
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
        Schema::dropIfExists('event__regs');
    }
}
