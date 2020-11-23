<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'libros';

    /**
     * Run the migrations.
     * @table libros
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idlibros');
            $table->string('isbn', 13);
            $table->string('titulo', 100);
            $table->integer('numpaginas');
            $table->year('apublicacion');

            $table->integer('idiomas_ididiomas')->unsigned();
            
            $table->integer('editoriales_ideditoriales')->unsigned();

            $table->foreign('editoriales_ideditoriales')->references('ideditoriales')->on('editoriales')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idiomas_ididiomas')->references('ididiomas')->on('idiomas')
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
