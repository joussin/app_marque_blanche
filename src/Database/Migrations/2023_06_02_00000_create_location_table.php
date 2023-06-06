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
        Schema::create('location', function (Blueprint $table) {
            $table->increments("id");

            $table->integer('user_id')->nullable()->unsigned();

            $table->float('lat');

            $table->float('long');

            $table->string('address')->nullable();


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });



        Schema::table('location', function (Blueprint $table) {
            $table->foreign(
                'user_id',
                'location_user_id_foreign')
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

        Schema::table('location', function (Blueprint $table) {
            $table->dropForeign('location_user_id_foreign');
        });



        Schema::dropIfExists('location');
    }
};
