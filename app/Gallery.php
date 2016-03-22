<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = ['name','order'];

    public function images(){
      return $this->hasMany(Image::class);
    }
}
