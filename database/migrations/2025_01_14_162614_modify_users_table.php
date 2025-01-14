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
            // Jika kolom 'name' sudah ada tetapi perlu diubah untuk menerima NULL
            $table->string('name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Mengembalikan perubahan jika migrasi dibatalkan
            $table->string('email')->nullable(false)->change();
            $table->dropColumn('username');
        });
    }
};
