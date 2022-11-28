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
        Schema::create('campaing_receptors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaing_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('sent')->default(false);
            $table->boolean('error')->default(false);
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
        Schema::dropIfExists('campaing_receptors');
    }
};
