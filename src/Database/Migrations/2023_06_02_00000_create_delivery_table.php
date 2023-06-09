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
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->integer('command_id');

$table->integer('delivery_user_id')->nullable();

$table->datetime('date_start')->nullable();

$table->datetime('date_finish_estimation')->nullable();

$table->datetime('date_finish')->nullable();


            $table->enum('status', ['WAITING', 'DELIVERING', 'DELIVERED'])->default('WAITING');

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
        Schema::dropIfExists('delivery');
    }
};
