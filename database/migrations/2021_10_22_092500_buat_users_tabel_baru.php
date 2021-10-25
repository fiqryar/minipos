<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatUsersTabelBaru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->id() ;
            $table->string('foto');
            $table->tinyInteger('level')->default(0);
            //$table->foreignId('current_team_id');
            $table->string('profile_photo_path', 2048);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(
                'foto',
                'leve;',
                'current_team_id',
                'profile_photo_path'
            );
        });
    }
}
