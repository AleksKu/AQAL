<?php

namespace AQAL\Sales;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }

}
