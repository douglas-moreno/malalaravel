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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('titulo');
            $table->string('zona');
            $table->string('secao');
            $table->string('sexo');
            $table->string('type');
            $table->datetime('birthday');
            $table->boolean('child');
            $table->boolean('negra');
            $table->foreignId('prestador_id')->constrained('prestadors');
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
        Schema::dropIfExists('clients');
    }
};
