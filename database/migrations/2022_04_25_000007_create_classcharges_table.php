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
        Schema::create('classcharges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clubclass_id');
            $table->foreignId('block_id')->nullable();
            $table->string('basis');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('status');
            $table->foreignId('prodcode_id')->nullable();
            $table->float('baseprice')->default(0.00);
            $table->float('priceper')->default(0.00);
            $table->float('maxprice')->nullable();
            $table->string('rule')->nullable();
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
        Schema::dropIfExists('classcharges');
    }
};
