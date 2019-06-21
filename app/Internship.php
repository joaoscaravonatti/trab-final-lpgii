<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function company()
    {
        return $this->hasOne('App\Company');
    }

    public function orientador()
    {
        return $this->hasOne('App\User');
    }
}
