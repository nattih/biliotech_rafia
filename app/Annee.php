<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    protected $fillable = [
        'parution',
    ];

    public function livres(){
        return $this->hasMany('App\Livre');
    }
}
