<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('address_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('image')->nullable();
            $table->string('cpf', 11)->uniqid()->nullable();
            $table->string('cns', 100)->uniqid()->nullable();
            $table->date('birth_date')->nullable();
            $table->string('mother', 100)->nullable();
            $table->string('father', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
