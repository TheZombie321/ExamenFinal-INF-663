<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Opcional si sigues la convención
    
    protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'categoria'
    ];
}