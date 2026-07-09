<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("ALTER TABLE questions MODIFY type ENUM('qcm', 'vrai_faux', 'texte_libre') NOT NULL DEFAULT 'qcm'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE questions MODIFY type ENUM('qcm', 'vrai_faux', 'text_libre') NOT NULL DEFAULT 'qcm'");
    }
};
