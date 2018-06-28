<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $table = 'adverts';

    public function advert_type()
    {
        return $this->belongsTo(AdvertType::class);
    }
}
