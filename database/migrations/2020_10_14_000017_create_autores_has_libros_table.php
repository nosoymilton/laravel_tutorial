<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoresHasLibrosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'autores_has_libros';

    /**
     * Run the migrations.
     * @table autores_has_libros
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('autores_has_libros_id');

            //campos id correspondiente a las tablas
            $table->integer('autores_idautores')->unsigned();
            $table->integer('libros_idlibros')->unsigned();
                        
            $table->foreign('autores_idautores')->references('idautores')->on('autores')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('libros_idlibros')->references('idlibros')->on('libros')
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
