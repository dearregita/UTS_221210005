<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table = 'DataBarang';
    protected $primaryKey = 'IdBarang';

    protected $fillable = [
        'NamaBarang',
        'DeskripsiBarang',
    ];
}
