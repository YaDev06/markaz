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
        Schema::create('qabuls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('kurs');
            $table->string('vaqt');
            $table->string('izoh');
            $table->string('admin_id');
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
        Schema::dropIfExists('qabuls');
    }
};