<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded=[];

  

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function users()
    {
        return $this->belongsToMany (User::class,'video_users');
    }

}
