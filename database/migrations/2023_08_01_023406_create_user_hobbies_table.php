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
        Schema::create('user_hobbies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hobby1_id');
            $table->unsignedBigInteger('hobby2_id');
            $table->unsignedBigInteger('hobby3_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hobby1_id')->references('id')->on('hobbies')->onDelete('cascade');
            $table->foreign('hobby2_id')->references('id')->on('hobbies')->onDelete('cascade');
            $table->foreign('hobby3_id')->references('id')->on('hobbies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_hobbies');
    }
};
