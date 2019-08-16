<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    public function Devis()
    {
        return $this->belongsTo(Devis::class);
    }
}
