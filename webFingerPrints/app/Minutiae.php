<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class minutiae extends Model
{
    protected $table = "minutiaes";

    protected $fillable = ['fingerprint_id','angle', 'x', 'y', 'mintype_id'];
}
