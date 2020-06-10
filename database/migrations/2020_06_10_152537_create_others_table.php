<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->string('campo_1', 255)->nullable();
            $table->string('campo_2', 255)->nullable();
            $table->string('campo_3', 255)->nullable();
            $table->string('campo_4', 255)->nullable();
            $table->string('campo_5', 255)->nullable();
            $table->string('campo_6', 255)->nullable();
            $table->string('campo_7', 255)->nullable();
            $table->string('campo_8', 255)->nullable();
            $table->string('campo_9', 255)->nullable();
            $table->string('campo_10', 255)->nullable();
            $table->string('costumer_cpf', 11);
            $table->foreign('costumer_cpf')->references('cpf')->on('costumers')->onDelete('');
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
        Schema::dropIfExists('others');
    }
}
