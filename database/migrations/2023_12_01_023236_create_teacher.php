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
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('users_id');
            $table->string('title');
            $table->string('nama');
            $table->enum('roles',[1,2,3]); // 1 = kepsek, 2 = guru, 3 = staff
            $table->string('NIP')->unique()->nullable();
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};
