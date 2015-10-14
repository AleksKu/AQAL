<?php

namespace Kazna;

use Illuminate\Database\Eloquent\Model;

use Kazna\Category;

class Product extends Model
{
    public function category () {
        return $this->belongsTo(Category::class);
    }
}
