<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model{

    /* No seria necesario automaticamente hara el plural para el nombre de la tabla.
    protected $table = 'cars'; */

    public $brand;
    public $model;
    public $cv;

    protected $fillable = [
        'user_id',
        'brand',
        'model',
        'cv',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
