<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Savs extends Model
{
    public function Savs()
    {
        return $this->belongsTo(Savs::class);
    }
}
