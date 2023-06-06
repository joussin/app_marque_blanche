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
            $table->increments("id");
            $table->integer('command_id')->nullable()->unsigned();

$table->integer('delivery_user_id')->nullable();

$table->datetime('date_start')->nullable();

$table->datetime('date_finish_estimation')->nullable();

$table->datetime('date_finish')->nullable();


            $table->enum('status', ['WAITING', 'DELIVERING', 'DELIVERED'])->default('WAITING');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });

        Schema::table('delivery', function (Blueprint $table) {
            $table->foreign(
                'command_id',
                'delivery_command_id_foreign')
                ->references('id')
                ->on('command')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('delivery', function (Blueprint $table) {
            $table->dropForeign('delivery_command_id_foreign');
        });


        Schema::dropIfExists('delivery');
    }
};
