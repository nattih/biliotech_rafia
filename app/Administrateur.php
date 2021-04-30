<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    
    class Administrateur extends Authenticatable{
        protected $fillable=[
            'username', 'email', 'password',
        ];
    }

?>