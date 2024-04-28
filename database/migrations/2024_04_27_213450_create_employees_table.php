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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('other_name');
            $table->integer('country');
            $table->integer('identification_type');
            $table->string('identification')->unique();
            $table->string('email')->unique();
            $table->string('fecha_ingreso');
            $table->integer('status')->unsigned();
            $table->integer('area');
            $table->string('register_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
