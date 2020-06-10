<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->string('cpf', 11);
            $table->string('nome', 100);
            $table->string('dtnascimento',8)->nullable();
            $table->string('idade', 3)->nullable();            
            $table->timestamps();
            $table->primary('cpf');
            $table->unique('cpf');
            //$table->foreignId('leads_id')->constrained('leads');
            $table->foreign('leads_id')->references('id')->on('leads')->onDelete('SET NULL');
       
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}
