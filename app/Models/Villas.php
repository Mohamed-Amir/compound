<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Villas extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compound()
    {
        return $this->belongsTo('App\Models\Compound','compound_id');
    }
}
