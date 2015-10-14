<?php

namespace Kazna;

use Illuminate\Database\Eloquent\Model;

use Kazna\Product;

class Category extends Model
{
    public function products () {
        return $this->hasMany(Product::class);
    }
}
