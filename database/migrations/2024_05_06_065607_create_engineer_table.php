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
        Schema::create('engineer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('mail')->nullable(false);
            $table->unsignedInteger('id_team')->nullable(false);
            $table->timestamps();

            $table->foreign('id_team')->references('id')->on('team');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engineer');
    }
};
