<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coincidence extends Model
{
    protected $table = "coincidences";

    protected $fillable = ['current_fingerprint_id','system_fingerprint_id', 'matching'];
}
