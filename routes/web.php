<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Car;


Route::get('/', function () {
    $corrado = new Car();
    $corrado-> color = "red";
    $corrado-> type = "volkswagen";

    // $cars = DB::select('select * from car');
    $cars = Car::all();
    return $cars;
});
