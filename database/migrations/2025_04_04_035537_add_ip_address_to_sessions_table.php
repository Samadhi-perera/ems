<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            // Add the 'ip_address' column
            $table->string('ip_address', 45)->nullable()->after('user_id'); // Use 'after' to place it after 'user_agent'
        });
    }

    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            // Rollback the addition of the 'ip_address' column
            $table->dropColumn('ip_address');
        });
    }
};
