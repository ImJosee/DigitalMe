<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 10,
        'title' => $faker->sentence(5),
        'subtitle' => $faker->sentence(10),
        'content' => $faker->sentence(15),
        'post_type' => 'NormalPost'
    ];
});
