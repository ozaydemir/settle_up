<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * Get the promoters records associated with the promoter.
     */
    public function promoters()
    {
        return $this->hasMany('App\Promoter');
    }
}
