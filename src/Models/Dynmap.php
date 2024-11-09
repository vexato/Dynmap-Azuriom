<?php

namespace Azuriom\Plugin\Dynmap\Models;

use Illuminate\Database\Eloquent\Model;

class Dynmap extends Model
{
    protected $table = 'dynmap';

    protected $fillable = ['url'];

    public $timestamps = false;
}
