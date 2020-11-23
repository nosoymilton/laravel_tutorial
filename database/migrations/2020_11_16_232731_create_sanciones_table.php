<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSancionesTable extends Migration
{

    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sanciones';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sancion');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->integer('ejemplares_idejemplares')->unsigned();

            $table->integer('prestamos_id')->unsigned();

            $table->BigInteger('users_id')->unsigned();
            
            $table->foreign('ejemplares_idejemplares')->references('idejemplares')->on('ejemplares')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('prestamos_id')->references('id')->on('prestamos')
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
