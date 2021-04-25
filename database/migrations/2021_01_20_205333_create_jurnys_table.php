<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;
class CreateJurnysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnys', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('partner_id')->unsigned()->nullable()->index();
            // $table->integer('user_id');
            $table->string('from');
            $table->string('to');
            $table->string('date');
            $table->string('break');
            $table->string('arrival_time');
            $table->string('driver_name');
            $table->double('price');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            // $table->unsignedBigInteger('partner_id');
            // $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('jurnys');
    }
}
