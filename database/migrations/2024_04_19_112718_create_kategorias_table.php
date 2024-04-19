<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('kategoriaNev');
            $table->timestamps();
        });

        DB::table('kategorias')->insert([
            [
                'kategoriaNev' => 'kat1',
            ],
            [
                'kategoriaNev' => 'kat2',
            ],
            [
                'kategoriaNev' => 'kat3',
            ],
            [
                'kategoriaNev' => 'kat4',
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
