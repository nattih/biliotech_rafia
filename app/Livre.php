<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable=[
        'titre', 'auteur_id', 'paye_id','type_id', 'annee_id',
    ];

    public function annee(){
        return $this->belongsTo('App\Annee');
    }
    public function auteur(){
        return $this->belongsTo('App\Auteur');
    }

    public function paye(){
        return $this->belongsTo('App\Paye');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
}
