<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', 11);
            $table->string('nome', 100);
            $table->string('dtnascimento',8)->nullable();
            $table->string('idade', 3)->nullable();
            $table->timestamps();
            $table->unique('cpf');
            $table->bigInteger('leads_id')->nullable();

            //$table->foreignId('leads_id')->constrained('leads');
            //$table->foreign('leads_id')->references('id')->on('leads')->onDelete('SET NULL');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
