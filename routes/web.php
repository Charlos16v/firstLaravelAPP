<?php

use Illuminate\Support\Facades\Route;

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
class Car{
    public $color;
    public $type;
}

Route::get('/', function () {
    $corrado = new Car();
    $corrado-> color = "red";
    $corrado-> type = "volkswagen";

    $cars = array($corrado);

    return $cars;
});
