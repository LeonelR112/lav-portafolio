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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('id_proyecto');
            $table->string('nombre', 250);
            $table->string('cliente', 350);
            $table->string('lenguajes', 1000)->comment("leng1,leng2,leng3...");
            $table->string('link_cliente', 1000)->comment('link real en producción')->nullable();
            $table->string('url_repositorio', 1000)->comment("link al repo remoto en github")->nullable();
            $table->string("descri_c", 1000)->nullable();
            $table->text("descri_l")->nullable();
            $table->string("dir_video_mp4", 1000)->nullable()->comment("video representativo en mp4");
            $table->string("imagen1", 1000)->nullable();
            $table->string("imagen2", 1000)->nullable();
            $table->string("imagen3", 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
