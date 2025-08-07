<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'comment',
        'image',
        'user_id ',
        'video_id ',
    ];

    public $timestamps = true;

    /*
     * Relationships
    */

    // One to Many (Inverse)
    public function video(){
        return $this->belongsTo(Video::class, 'video_id');
    }

    // One to Many (Inverse)
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // One to Many
    public function responses(){
        return $this->hasMany(Response::class);
    }
}
