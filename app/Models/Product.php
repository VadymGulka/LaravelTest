<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'desc',
        'precio',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'precio' => 'float'
    ];
}
