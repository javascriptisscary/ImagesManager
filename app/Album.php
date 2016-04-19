<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    protected $table = 'albums';
    
    protected $fillable = ['id', 'title', 'description', 'user_id'];
    
    public function owner()
    {
      return $this->belongsTo('App\User');
    }
    
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
