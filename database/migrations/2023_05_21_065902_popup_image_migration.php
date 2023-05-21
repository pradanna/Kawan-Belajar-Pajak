<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopupImageMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dashboards', function (Blueprint $table) {
            //
            $table->text('popup')->default(null)->nullable(true);
        });

        Schema::table('education', function (Blueprint $table) {
            //
            $table->text('image')->default(null)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dashboards', function (Blueprint $table) {
            //
            $table->dropColumn('popup');
        });

        Schema::table('education', function (Blueprint $table) {
            //
            $table->dropColumn('image');
        });
    }
}
