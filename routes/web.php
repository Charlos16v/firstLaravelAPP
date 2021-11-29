<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    // $cars = DB::select('select * from car');
    $cars = Car::all();
    return $cars;
});

// Parametro id no obligatorio por defecto valor 1.
Route::get('/cars/{id?}', function ($id = 1) {
    $result = Car::find($id);
    return $result;
});

Route::post('/cars', function (Request $request) {
    return $request->request->all();
});
