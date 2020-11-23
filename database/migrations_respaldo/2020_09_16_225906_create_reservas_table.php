<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{

    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reservas';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('fechareserva');
            $table->integer('ejemplares_idejemplares')->unsigned();
            $table->integer('users_idusers')->unsigned();
            $table->timestamps();

            $table->foreign('ejemplares_idejemplares')->references('idejemplares')->on('ejemplares')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('users_idusers')->references('id')->on('users')
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
