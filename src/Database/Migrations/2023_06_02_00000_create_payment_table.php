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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('command_id')->nullable()->unsigned();



            $table->enum('type', ['CASH', 'CB'])->default('CASH');
            $table->enum('status', ['WAITING', 'PAID', 'FAILED', 'CANCELED'])->default('WAITING');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });

        Schema::table('payment', function (Blueprint $table) {
            $table->foreign(
                'command_id',
                'payment_command_id_foreign')
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


        Schema::table('payment', function (Blueprint $table) {
            $table->dropForeign('payment_command_id_foreign');
        });


        Schema::dropIfExists('payment');
    }
};
