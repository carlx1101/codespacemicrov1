<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    
    public function article()
    {
        return $this->hasOne(Article::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class);
    }
    
    
}
