<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    public function plant(){
        return $this->belongsTo(Plant::class);
    }
}
