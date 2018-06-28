<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
