<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbTiendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA
        schema::create('tb_tiendas', function (Blueprint $table){
            $table->bigincrements('id_tienda');
            $table->string('clave', 30);
            $table->string('nombre', 50);
            $table->timesTamps();
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
                shema::dropIfExists('tb_tiendas');

        //
    }
}
