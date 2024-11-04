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
        Schema::create('DataBarang', function (Blueprint $table) {
            $table->increments('IdBarang'); // Integer, primary key, auto increment
            $table->string('NamaBarang');   // String
            $table->string('DeskripsiBarang'); // String
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DataBarang');
    }
};
