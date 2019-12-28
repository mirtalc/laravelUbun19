<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Relationship per a l'usuari
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
