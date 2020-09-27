<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Character;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Character::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'uuid' => $faker->uuid,
        'nome' => $faker->name,
        'raca' => 'humano',
        'sexo' => $faker->boolean,
        'classe' => 'arcebispo',
    ];
});
