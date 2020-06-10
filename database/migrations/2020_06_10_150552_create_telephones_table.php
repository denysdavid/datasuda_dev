<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelephonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephones', function (Blueprint $table) {
            $table->id();
            $table->string('ddd', 3)->nullable();
            $table->string('telefone', 9)->nullable();
            $table->string('costumer_cpf', 11);
            $table->foreign('costumer_cpf')->references('cpf')->on('costumers');
            $table->foreignId('leads_id')->constrained('leads');
       
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
        Schema::dropIfExists('telephones');
    }
}
