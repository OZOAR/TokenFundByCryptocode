<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioGraphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_graph', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asset')->unique();
            $table->string('ticket');
            $table->decimal('balance', 16, 8);
            $table->decimal('usd', 8, 3);
            $table->decimal('quota');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_graph');
    }
}
