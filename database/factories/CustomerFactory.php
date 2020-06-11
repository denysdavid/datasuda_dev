<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'cpf' => $faker->cpf,
        'nome' => $faker->nome,
        'dtnascimento' => $faker->dtnascimento,
        'idade' => $faker->idade,



    ];
});
