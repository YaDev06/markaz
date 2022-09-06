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
        Schema::create('guruhs', function (Blueprint $table) {
            $table->id();
            $table->text('t_id');
            $table->text('g_vaqt');
            $table->text('g_kun');
            $table->text('g_name');
            $table->text('g_teacher');
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
        Schema::dropIfExists('guruhs');
    }
};