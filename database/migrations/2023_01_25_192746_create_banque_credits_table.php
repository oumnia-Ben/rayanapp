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
        Schema::create('banque_credits', function (Blueprint $table) {
            $table->id();
            $table->integer('banque_id');
            $table->integer('expense_id');
            $table->string('name');
            $table->date('date');
            $table->float('amount')->default(0);
            $table->float('paid')->default(0);
            $table->float('rest')->default(0);
            $table->datetime('notified_at')->nullable();
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
        Schema::dropIfExists('banque_credits');
    }
};
