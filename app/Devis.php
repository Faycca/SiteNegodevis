<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    /**
     * The users that belong to the devis.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
