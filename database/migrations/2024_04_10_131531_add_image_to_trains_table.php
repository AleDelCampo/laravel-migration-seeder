<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('immagine');
        });
    }

    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('immagine');
        });
    }
};
