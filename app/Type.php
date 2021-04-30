<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type',
    ];

    public function livres(){
        return $this->hasMany('App\Livre');
    }
}
