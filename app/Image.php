<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    public function imageable()
    {
        //MorphTo => transformar a
        return $this->MorphTo();
    }
}
