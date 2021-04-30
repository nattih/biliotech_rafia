<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $fillable = [
        'nom', 'prenom',
    ];

    public function livres(){
        return $this->hasMany('App\Livre');
    }
}
