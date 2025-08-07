<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Response extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'comment_id',
        'response',
        'image'
    ];

    public $timestamps = true;

    /*
     * Relationships
    */

    // One to Many (Inverse)
    public function comment(){
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    // One to Many (Inverse)
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
