<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkbox extends Model
{
    use SoftDeletes;

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

    // One to Many (Inverse)
    public function video(){
        return $this->belongsTo(Video::class, 'video_id');
    }
}
