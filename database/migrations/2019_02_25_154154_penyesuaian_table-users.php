<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('roles');
            $table->text('address');
            $table->string('phone', 13);
            $table->string('avatar');
            $table->enum('status', ["Active", "Inactive"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('username');
        $table->dropColumn('roles');
        $table->dropColumn('address');
        $table->dropColumn('phone');
        $table->dropColumn('avatar');
        $table->dropColumn('status');
    }
}
