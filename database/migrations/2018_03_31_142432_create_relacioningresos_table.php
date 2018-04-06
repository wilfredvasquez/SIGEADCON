<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacioningresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacioningresos', function (Blueprint $table) {
            $table->increments('id');
				$table->integer('id_doc');
				$table->integer('sueldo')->nullable()->default(0);
				$table->integer('honorarios')->nullable()->default(0);
				$table->integer('ventas')->nullable()->default(0);
				$table->integer('alquiler')->nullable()->default(0);
				$table->integer('intereses')->nullable()->default(0);
				$table->integer('dividendos')->nullable()->default(0);
				$table->integer('ingresos')->nullable()->default(0);
				$table->integer('promedio')->nullable()->default(0);
				$table->string('nro_seguridad')->nullable();
				$table->string('cod_doc_tipo')->default("RING");
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
        Schema::dropIfExists('relacioningresos');
    }
}
