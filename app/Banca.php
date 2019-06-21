<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    public function orientador()
    {
        return $this->hasOne('App\User');
    }

    public function avaliador1()
    {
        return $this->hasOne('App\User');
    }

    public function avaliador2()
    {
        return $this->hasOne('App\User');
    }

    public function company()
    {
        return $this->hasOne('App\Company');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
