<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
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

    // One to Many
    public function videos(){
        return $this->hasMany(Video::class);
    }

    // Many to Many
    public function users() {
        return $this->belongsToMany(User::class, 'sales', 'course_id', 'user_id')
               ->withPivot('quantity', 'price', 'discount');
    }

    // One to Many (Inverse)
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
