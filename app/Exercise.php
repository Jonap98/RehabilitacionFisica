<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exercise';

    protected $fillable = ['id', 'name', 'path', 'id_therapy', 'active'];
}
