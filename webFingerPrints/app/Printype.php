<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printype extends Model
{
    protected $table = "printypes";

    protected $fillable = ['id', 'name'];

    protected $primaryKey = "id";
}
