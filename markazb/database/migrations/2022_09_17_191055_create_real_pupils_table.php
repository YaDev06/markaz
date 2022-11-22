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
        Schema::create('real_pupils', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('kurs');
            $table->string('guruh');
            $table->string('admin_id');
            $table->string('kurs1')->nullable();
            $table->string('kurs2')->nullable();
            $table->string('izoh')->nullable();
            $table->string('tolov')->default(0);
            $table->string('kelgan_vaqt');
            $table->string('ketgan_vaqt')->default(0);
            
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
        Schema::dropIfExists('real_pupils');
    }
};