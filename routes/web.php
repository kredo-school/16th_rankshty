<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Ikemen's & Kawai's code
function SimulateConflict()
{
    $name1 = "Ore wa Ikemen";
    $tagLine1 = "Watashiwa ikemen";
    $timesIkemen = 30;

    $name2 = "Ore wa kawai";
    $tagLine2 = "Watashiwa sugoi";
    $timesKawai = 30;

    console . log($name1);
    console . log($tagLine1);


    for ($i = 0; $i < $timesKawai; $i++) {
        console . log("ore wa " . $timesKawai . ' times kawai.');
    }

    console . log($name2);
    console . log($tagLine2);

    for ($i = 0; $i < $timesIkemen; $i++) {
        console . log("ore wa " . $timesIkemen . ' times ikemen.');
    }
}
