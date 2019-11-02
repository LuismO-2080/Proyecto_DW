<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('serie',20);
            $table->String('fecha',20);
            $table->String('cliente',100);
            $table->String('nit',10);
            $table->String('direccion',100);
            $table->String('cantidad',20);
            $table->String('descripcion',100);
            $table->String('precio',20);
            $table->String('monto',20);

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
        Schema::dropIfExists('serie');
    }
}
