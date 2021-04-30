<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paye extends Model
{
    protected $fillable = [
        'pays',
    ];

    public function livres(){
        return $this->hasMany('App\Livre');
    }
}
