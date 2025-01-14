<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        // Menambahkan kolom username dan email
        $table->string('email')->unique()->nullable(false)->change(); // Kolom email
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Menghapus kolom username dan email
        $table->dropColumn('username');
        $table->dropColumn('email');
    });
}
};
