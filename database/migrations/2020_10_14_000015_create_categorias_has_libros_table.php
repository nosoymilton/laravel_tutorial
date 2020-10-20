<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasHasLibrosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'categorias_has_libros';

    /**
     * Run the migrations.
     * @table categorias_has_libros
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('categorias_has_libros_id');

            $table->integer('categorias_idcategorias')->unsigned();
            $table->integer('libros_idlibros')->unsigned();
            
            $table->foreign('categorias_idcategorias')->references('idcategorias')->on('categorias')
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
