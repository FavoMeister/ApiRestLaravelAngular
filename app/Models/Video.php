<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'course_id',
        'title',
        'content',
        'url',
        'file',
        'descarga',
        'seccion',
        'title_accordion',
    ];

    public $timestamps = true;

    /*
     * Relationships
    */

    // One to Many (Inverse)
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // One to Many (Inverse)
    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    // One to Many
    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }
}
