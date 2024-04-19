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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaID')->references('id')->on('kategorias');
            $table->timestamps();
        });

        DB::table('teszts')->insert([
            [
                'kerdes' => 'Kérdés 1', 'v1' => 'Válasz 1', 'v2' => 'Válasz 2', 'v3' => 'Válasz 2', 'v4' => 'Válasz 4', 'helyes' => 'v2', 'kategoriaID' => 4
            ],
            [
                'kerdes' => 'Kérdés 1', 'v1' => 'Válasz 1', 'v2' => 'Válasz 2', 'v3' => 'Válasz 2', 'v4' => 'Válasz 4', 'helyes' => 'v2', 'kategoriaID' => 4
            ],
            [
                'kerdes' => 'Kérdés 2', 'v1' => 'Válasz 1', 'v2' => 'Válasz 2', 'v3' => 'Válasz 2', 'v4' => 'Válasz 4', 'helyes' => 'v2', 'kategoriaID' => 2
            ],
            [
                'kerdes' => 'Kérdés 2', 'v1' => 'Válasz 1', 'v2' => 'Válasz 2', 'v3' => 'Válasz 2', 'v4' => 'Válasz 4', 'helyes' => 'v2', 'kategoriaID' => 2
            ],
            [
                'kerdes' => 'Kérdés 3', 'v1' => 'Válasz 1', 'v2' => 'Válasz 2', 'v3' => 'Válasz 2', 'v4' => 'Válasz 4', 'helyes' => 'v3', 'kategoriaID' => 3
            ],
            [
                'kerdes' => 'Kérdés 4', 'v1' => 'Válasz 1', 'v2' => 'Válasz 2', 'v3' => 'Válasz 2', 'v4' => 'Válasz 4', 'helyes' => 'v4', 'kategoriaID' => 1
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
