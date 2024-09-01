<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagensTable extends Migration
{
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id(); // Adiciona uma coluna ID auto-incremento
            $table->text('mensagem'); // Adiciona uma coluna de texto para a mensagem
            $table->timestamps(); // Adiciona colunas created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
}
