<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = 'categories';

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
