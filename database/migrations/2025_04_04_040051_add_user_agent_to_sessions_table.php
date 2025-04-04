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
            // Add the 'user_agent' column after the 'ip_address' column
            $table->string('user_agent')->nullable()->after('ip_address');
        });
    }

    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            // Drop the 'user_agent' column if rolling back the migration
            $table->dropColumn('user_agent');
        });
    }
};
