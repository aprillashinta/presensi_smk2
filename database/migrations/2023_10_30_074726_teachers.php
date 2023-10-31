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
            $table->string('user_id');
            $table->string('code')->unique()->notnull();
            $table->string('name')->unique();
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('gender', ['perempuan', 'laki-laki']);
            $table->enum('religion', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu']);
            $table->enum('day', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            $table->date('address');
            $table->date('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
