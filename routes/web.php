<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Car;


Route::get('/', function () {
    // $cars = DB::select('select * from car');
    $cars = Car::all();
    return $cars;
});

// Parametro id no obligatorio por defecto valor 1.
Route::get('/car/{id?}', function ($id = 1) {
    $result = Car::find($id);
    return $result;
});
