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
        Schema::create('command', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('user_id')->nullable()->unsigned();;

            $table->datetime('date');

            $table->enum('status', ['CART', 'COMMAND_WAITING', 'COMMAND_FINISH', 'COMMAND_CANCEL'])->default('CART');


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });

        Schema::table('command', function (Blueprint $table) {
            $table->foreign(
                'user_id',
                'command_user_id_foreign')
                ->references('id')
                ->on('users')
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
        Schema::table('command', function (Blueprint $table) {
            $table->dropForeign('command_user_id_foreign');
        });

        Schema::dropIfExists('command');
    }
};
