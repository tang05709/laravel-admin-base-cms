<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertType extends Model
{
    protected $table = 'advert_types';

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
