<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('tb_productos', function (Blueprint $table){
            $table->bigincrements('id_productos');
            $table->string('clave', 30);
            $table->string('nombre', 50);
            $table->string('cantidad');
            $table->decimal('costo');
            $table->string('id_tipo');
            $table->string('id_tienda');
            $table->boolean('activo');
            $table->text('foto');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        //
        shema::dropIfExists('tb_productos');
    }
}
