<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function Contact()
    {
        return $this->belongsTo(Contact::class);
    }
}

