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

Route::get('/car/{id}', function ($id) {
    $result = Car::find($id);
    return $result;
});
