<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'category_id',
        'name',
        'detalle',
        'image',
        'url',
        'accordion',
        'precio_ahora',
        'precio_antes',
        'num_ventas',
    ];

    public $timestamps = true;

    /*
     * Relationships
    */
}
