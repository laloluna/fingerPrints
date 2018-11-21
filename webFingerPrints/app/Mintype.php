<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mintype extends Model
{
    protected $table = "mintypes";

    protected $fillable = ['id', 'name'];

    protected $primaryKey = "id";
}
