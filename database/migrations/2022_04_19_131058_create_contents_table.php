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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('Title');
            $table->string('Keywords')->nullable();
            $table->string('Description')->nullable();
            $table->string('Image')->nullable();
            $table->longText('Detail')->nullable();
            $table->string('Type')->nullable();
            $table->string('Publisher')->nullable();
            $table->string('Aim')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('contents');
    }
};
