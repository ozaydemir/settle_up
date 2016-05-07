<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    /**
     * Get the artist record associated with the promoter.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}
