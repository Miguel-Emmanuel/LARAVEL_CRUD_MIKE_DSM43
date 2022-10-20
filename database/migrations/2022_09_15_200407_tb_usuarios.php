 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('tb_usuarios', function (Blueprint $table){
            $table->bigincrements('id_usuario');
            $table->string('clave', 30);
            $table->string('nombre', 50);
            $table->string('app', 50);
            $table->string('ap', 50)->nullable();
            $table->date('fn');
            $table->string('gen', 50);
            $table->text('foto')->nullable();
            $table->string('email');
            $table->string('pass');
            $table->string('nivel');
            $table->boolean('activo');
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
        //
        
        shema::dropIfExists('tb_usuarios ');
    }
}
