<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->comment('0 : Akuntansi Online | 1 : Akuntansi Offline | 2 : Pajak Online | 3 : Pajak Offline | 4 : Fasilitas | 5 : Benefit');
            $table->string('name')->default(null)->nullable(true);
            $table->text('description');
            $table->string('schedule')->nullable(true)->default(null);
            $table->integer('price')->nullable(true)->default(0);
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
        Schema::dropIfExists('education');
    }
}
