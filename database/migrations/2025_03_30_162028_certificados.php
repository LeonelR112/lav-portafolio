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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id('id_cert');
            $table->string("nombre", 500);
            $table->string('url_credencial', 1000)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('url_imagen_cert', 1000)->nullable();
            $table->float("orden")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
