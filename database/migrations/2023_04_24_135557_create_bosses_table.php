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
        Schema::create('bosses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('weapon');
            $table->string('race');
            $table->string('gender');
            $table->string('type');
            $table->string('weakness');
            $table->string('element');
            $table->string('movement');
            $table->string('game');
            $table->string('year');
            $table->longText('image', 100000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bosses');
    }
};
