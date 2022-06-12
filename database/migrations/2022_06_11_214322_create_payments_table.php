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
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id');
            $table->string( 'name',20)->nullable();
            $table->integer( 'card_number')->nullable();
            $table->string( 'exp_date')->nullable();
            $table->integer( 'cvv')->nullable();
            $table->integer( 'amount')->nullable();
            $table->string( 'note',20)->nullable();
            $table->string( 'status',5)->default('New');
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
        Schema::dropIfExists('payments');
    }
};