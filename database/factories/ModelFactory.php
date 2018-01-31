<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Aluno::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'registro' => $faker->unique->numberBetween(1, 3000),
        'serie' => $faker->numberBetween(1, 8),
        'turma' => $faker->numberBetween(101, 120),
        'media' => $faker->randomFloat(2, 0, 10),
        'faltas' => $faker->numberBetween(0,30),
        'status' => 'em analise'
    ];

});

$factory->define(App\Professor::class, function (Faker\Generator $faker) {

    return [
        'credencial' => $faker->unique->numberBetween(10000000,99999999),
        'nome' => $faker->name,
        'disciplina' => $faker->numberBetween(1,5),
        'quantidade_turmas' => $faker->numberBetween(1,10),
        'total_alunos' => $faker->numberBetween(30,1000),
        'aprovados' => $faker->numberBetween(0, 1000),
        'horas_aula' => $faker->numberBetween(2,200),
        'salario' => $faker->randomFloat(2, 3000, 40000),
        'email' => $faker->safeEmail
    ];

});