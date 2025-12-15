<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('invite_code')->unique()->nullable();
        $table->unsignedBigInteger('invited_by')->nullable();
        $table->unsignedBigInteger('team_id')->nullable();

        $table->foreign('invited_by')->references('id')->on('users')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['invited_by']);
        $table->dropColumn(['invite_code', 'invited_by', 'team_id']);
    });
}
};
