<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * 设置image
     *
     * @param  string  $value
     * @return string
     */
    public function setImageAttribute($value)
    {
        $this->attributes['image'] = "uploads/" . $value;
    }
}
