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
        Schema::create('expnses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('period_id');
            $table->date('date_payment');
            $table->integer('banque_id');
            $table->float('amount')->default(0);
            $table->boolean('stat')->default(1);
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
        Schema::dropIfExists('expnses');
    }
};
