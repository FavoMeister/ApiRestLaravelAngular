<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        //'status',
    ];

    public $timestamps = true;

    /*
     * Relationships
    */

    // One to Many
    public function users(){
        return $this->hasMany(Course::class);
    }
    
}
