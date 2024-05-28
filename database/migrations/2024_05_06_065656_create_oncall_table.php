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
        Schema::create('oncall', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable(false);
            $table->unsignedInteger('id_type')->nullable(false);
            $table->unsignedInteger('id_engineer')->nullable(false);
            $table->timestamps();

            $table->foreign('id_type')->references('id')->on('oncall_type');
            $table->foreign('id_engineer')->references('id')->on('engineer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oncall');
    }
};
