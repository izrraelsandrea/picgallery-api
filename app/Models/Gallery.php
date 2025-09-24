<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    use HasFactory;

    protected $fillable = ['publisher_id', 'name', 'link'];

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
    
    public function pictures(){
        return $this->hasMany(Picture::class);
    }

}
