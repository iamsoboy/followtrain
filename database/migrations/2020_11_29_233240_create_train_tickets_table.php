<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('train_id')->unsigned()->nullable();
            $table->foreign('train_id')->references('id')->on('trains')
                ->onUpadate('cascade')->onDelete('set null');
            $table->string('ticket_class');
            $table->text('ticket_description');
            $table->double('price');
            $table->string('seat_numbers');
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('train_tickets');
    }
}
