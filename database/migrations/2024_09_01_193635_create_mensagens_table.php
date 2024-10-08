<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagensTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('mensagens')) {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->text('mensagem');
            $table->timestamps();
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
}
