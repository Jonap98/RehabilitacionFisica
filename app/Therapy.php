<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapy extends Model
{
    protected $table = 'therapy';

    protected $fillable = ['id', 'name', 'image', 'active'];
}
