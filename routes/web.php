<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Faker\Generator as Faker;
//use Illuminate\Support\Str;

Route::get('/', function (Faker $faker) {

    $faketext = $faker->text(25);


    return view('welcome', [
        'faketext' => $faketext,
        'fakemenu' => $faker->name,
        ]);
});
