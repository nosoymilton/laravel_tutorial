<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{

    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'prestamos';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('fecha_reserva')->nullable()->default(null);
            $table->date('fecha_prestamo')->nullable()->default(null);
            $table->date('fecha_devolucion')->nullable()->default(null);
            $table->string('status');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('eliminated_at')->nullable()->default(null);

            $table->integer('ejemplares_idejemplares')->unsigned();

            $table->BigInteger('users_id')->unsigned();
            
            $table->foreign('ejemplares_idejemplares')->references('idejemplares')->on('ejemplares')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
