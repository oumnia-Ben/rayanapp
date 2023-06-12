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
        Schema::create('banque_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('banque_id');
            $table->integer('banque_credit_id');
            $table->date('date');
            $table->float('amount')->default(0);
            $table->text('file')->nullable();
            $table->boolean('is_confirmed')->defaul(0);
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('banque_payments');
    }
};
