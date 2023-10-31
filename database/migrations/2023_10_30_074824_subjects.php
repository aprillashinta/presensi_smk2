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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->enum('day', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            $table->smallint('index')->default(1);
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('classroom_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }
};
